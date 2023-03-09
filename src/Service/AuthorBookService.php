<?php

namespace App\Service;

use App\Entity\Book;
use App\Entity\BookToBookFormat;
use App\Exception\BookAlreadyExistsException;
use App\Mapper\BookMapper;
use App\Model\Author\BookDetails;
use App\Model\Author\BookFormatOptions;
use App\Model\Author\BookListItem;
use App\Model\Author\BookListResponse;
use App\Model\Author\CreateBookRequest;
use App\Model\Author\UpdateBookRequest;
use App\Model\Author\UploadCoverResponse;
use App\Model\IdResponse;
use App\Repository\BookCategoryRepository;
use App\Repository\BookFormatRepository;
use App\Repository\BookRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class AuthorBookService
{
    public function __construct(
        private BookRepository $bookRepository,
        private BookFormatRepository $bookFormatRepository,
        private BookCategoryRepository $bookCategoryRepository,
        private SluggerInterface $slugger,
        private UploadService $uploadService
    )
    {
    }

    //поиск книги автором
    public function getBooks(UserInterface $user): BookListResponse
    {
        return (new BookListResponse(
            array_map([$this, 'map'], $this->bookRepository->findUserBooks($user))
        ));
    }

    public function map(Book $book): BookListItem
    {
        return (new BookListItem())
            ->setId($book->getId())
            ->setImage($book->getImage())
            ->setTitle($book->getTitle())
            ->setSlug($book->getSlug());
    }

    //удаление книги автором
    public function deleteBookById(int $id): void
    {
        $book = $this->bookRepository->getBookById($id);

        $this->bookRepository->removeAndCommit($book);
    }

    public function createBook(CreateBookRequest $request, UserInterface $user): IdResponse
    {
        $slug = $this->slugifyOfThrow($request->getTitle());
        $book = (new Book())
            ->setTitle($request->getTitle())
            ->setSlug($slug)
            ->setUser($user);

        $this->bookRepository->saveAndCommit($book);

        return new IdResponse($book->getId());
    }

    public function uploadCover(int $id, UploadedFile $file): UploadCoverResponse
    {
        $book = $this->bookRepository->getBookById($id);
        $oldImage = $book->getImage();
        $link = $this->uploadService->uploadBookFile($id, $file);

        $book->setImage($link);
        $this->bookRepository->commit();

        if (null !== $oldImage) {
            $this->uploadService->deleteBookFile($book->getId(), basename($oldImage));
        }
        return new UploadCoverResponse($link);
    }

    public function getBook(int $id): BookDetails
    {
        $book = $this->bookRepository->getBookById($id);

        $bookDetails = (new BookDetails())
            ->setIsbn($book->getIsbn())
            ->setFormats(BookMapper::mapFormats($book))
            ->setDescription($book->getDescription())
            ->setCategories(BookMapper::mapCategories($book));

        return BookMapper::map($book, $bookDetails);
    }

    //метод для получения slug
    private function slugifyOfThrow(string $title): string
    {
        //генерируем slug
        $slug = $this->slugger->slug($title);

        if ($this->bookRepository->existsBySlug($slug)) {
            throw new BookAlreadyExistsException();
        }

        return $slug;
    }

    public function updateBook(int $id, UpdateBookRequest $updateBookRequest)
    {
        $book = $this->bookRepository->getBookById($id);
        $title = $updateBookRequest->getTitle();
        if (!empty($title)) {
            $book->setTitle($title)->setSlug($this->slugifyOfThrow($title));
        }
        $formats = array_map(function (BookFormatOptions $options) use ($book): BookToBookFormat {
            $format = (new BookToBookFormat())
                ->setPrice($options->getPrice())
                ->setDiscountPercent($options->getDiscountPercent())
                ->setBook($book)
                ->setFormat($this->bookFormatRepository->getById($options->getId()));

            $this->bookRepository->saveBookFormatReference($format);
            return $format;
        }, $updateBookRequest->getFormats());

        //удаляем старые форматы
        foreach ($book->getFormats() as $format) {
            $this->bookRepository->removeBookFormatReference($format);
        }

        $book->setAutors($updateBookRequest->getAuthors())
            ->setDescription($updateBookRequest->getDescription())
            ->setIsbn($updateBookRequest->getIsbn())
            ->setCategories(new ArrayCollection(
                $this->bookCategoryRepository->findBookCategoriesByIds($updateBookRequest->getCategories())
            ))
            ->setFormats(new ArrayCollection($formats));

        $this->bookRepository->commit();
    }

}