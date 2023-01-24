<?php

namespace App\Service;

use App\Entity\Book;
use App\Entity\BookCategory;
use App\Entity\BookToBookFormat;
use App\Exception\BookCategoryNotFoundException;
use App\Exception\BookCategoryNotFoundExeption;
use App\Model\BookDetails;
use App\Model\BookFormat;
use App\Model\BookListItem;
use App\Model\BookListResponse;
use App\Repository\BookCategoryRepository;
use App\Repository\BookRepository;
use App\Repository\ReviewRepository;
use Doctrine\Common\Collections\Collection;

class BookService
{
    public function __construct(
        private BookRepository $bookRepository,
        private BookCategoryRepository $bookCategoryRepository,
        private ReviewRepository $reviewRepository
    )
    {
    }

    public function getBooksByCategory(int $categoryId): BookListResponse
    {
        if (!$this->bookCategoryRepository->existsById($categoryId)) {
            throw new BookCategoryNotFoundException();
        }

        return new BookListResponse(array_map(
            [$this, 'map'],
            $this->bookRepository->findBooksByCategoryId($categoryId)
        ));
    }

    public function getBookById(int $id): BookDetails
    {
        $book = $this->bookRepository->getById($id);
        $reviews = $this->reviewRepository->countByBookId($id);
        $ratingSum = $this->reviewRepository->getBookTotalRatingSum($id);

        $categories = $book->getCategories()
            ->map(
                fn(BookCategory $bookCategory) => (new \App\Model\BookCategory(
                    $bookCategory->getId(),
                    $bookCategory->getTitle(),
                    $bookCategory->getSlug()
                ))
            );

        return (new BookDetails())
            ->setId($book->getId())
            ->setTitle($book->getTitle())
            ->setSlug($book->getSlug())
            ->setImage($book->getImage())
            ->setAuthors($book->getAutors())
            ->setMeap($book->isMeap())
            ->setPublicationDate($book->getPublicationDate()->getTimestamp())
            ->setRating($reviews > 0 ? $ratingSum / $reviews : 0)
            ->setReviews($reviews)
            ->setFormats($this->mapFormats($book->getFormats()))
            ->setCategories($categories->toArray());
    }

    /**
     * @param Collection<BookToBookFormat> $formats
     * @return array
     */
    private function mapFormats(Collection $formats): array
    {
        $mapFormats =  $formats->map(fn(BookToBookFormat $formatJoin) => (new BookFormat())
                ->setId($formatJoin->getFormat()->getId())
                ->setTitle($formatJoin->getFormat()->getTitle())
                ->setDescription($formatJoin->getFormat()->getDescription())
                ->setComment($formatJoin->getFormat()->getComment())
                ->setPrice($formatJoin->getPrice())
                ->setDiscountPercent($formatJoin->getDiscountPercent())
        );
        return $mapFormats;
    }

    private function map(Book $book): BookListItem
    {
        return (new BookListItem())
            ->setId($book->getId())
            ->setTitle($book->getTitle())
            ->setSlug($book->getSlug())
            ->setImage($book->getImage())
            ->setAuthors($book->getAutors())
            ->setMeap($book->isMeap())
            ->setPublicationDate($book->getPublicationDate()->getTimestamp());
    }


}