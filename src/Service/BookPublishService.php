<?php

namespace App\Service;

use App\Model\Author\PublishBookRequest;
use App\Repository\BookRepository;
use DateTimeInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;

class BookPublishService
{
    public function __construct(
        private EntityManagerInterface $em,
        private BookRepository $bookRepository
    )
    {
    }
    //ставим книгу на публикацию
    public function publish(int $id, PublishBookRequest $publishBookRequest): void
    {
        $this->setPublicationDate($id, $publishBookRequest->getDate());
    }

    //снятие книги с публикации
    public function unpublish(int $id): void
    {
        $this->setPublicationDate($id, null);
    }

    private function setPublicationDate(int $id, ?DateTimeInterface $datetime): void
    {
        $book = $this->bookRepository->getBookById($id);
        $book->setPublicationDate($datetime);
        $this->em->flush();
    }

}