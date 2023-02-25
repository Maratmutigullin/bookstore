<?php

namespace App\Service;

use App\Entity\Book;
use App\Exception\BookAlreadyExistsException;
use App\Model\Author\BookListItem;
use App\Model\Author\BookListResponse;
use App\Model\Author\CreateBookRequest;
use App\Model\IdResponse;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\String\Slugger\SluggerInterface;

class AuthorService
{
    public function __construct(
        private EntityManagerInterface $em,
        private BookRepository $bookRepository,
        private SluggerInterface $slugger,
        private Security $security
    )
    {
    }

    //поиск книги автором
    public function getBooks(): BookListResponse
    {
        $user = $this->security->getUser();
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
        $user = $this->security->getUser();
        $book = $this->bookRepository->getUserBookById($id, $user);

        $this->em->remove($book);
        $this->em->flush();
    }

    public function createBook(CreateBookRequest $request): IdResponse
    {
        //генерируем slug
        $slug = $this->slugger->slug($request->getTitle());

        if ($this->bookRepository->existsBySlug($slug)) {
            throw new BookAlreadyExistsException();
        }

        $user = $this->security->getUser();
        $book = (new Book())
            ->setTitle($request->getTitle())
            ->setMeap(false)
            ->setSlug($slug)
            ->setUser($user);

        $this->em->persist($book);
        $this->em->flush();

        return new IdResponse($book->getId());
    }
}