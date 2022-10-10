<?php

namespace App\Tests\Service;

use App\Entity\Book;
use App\Entity\BookCategory;
use App\Exception\BookCategoryNotFoundExeption;
use App\Model\BookListItem;
use App\Model\BookListResponse;
use App\Repository\BookCategoryRepository;
use App\Repository\BookRepository;
use App\Service\BookService;
use ContainerAlytgC0\getDoctrine_Migrations_ContainerAwareMigrationsFactory_InnerService;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

class testGetBooksByCategory extends TestCase
{
    public function testGetBooksByCategoryNotFound(): void
    {
        $bookRepository = $this->createMock(BookRepository::class);
        $bookCategoryRepository = $this->createMock(BookCategoryRepository::class);
        $bookCategoryRepository->expects($this->once())
            ->method('find')
            ->with(130)
            ->willThrowException(new BookCategoryNotFoundExeption());

        $this->expectException(BookCategoryNotFoundExeption::class);

        (new BookService($bookRepository, $bookCategoryRepository))->getBooksByCategory(130);

    }

    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    public function testGetBooksByCategory():void
    {
        $bookRepository = $this->createMock(BookRepository::class);
        $bookRepository->expects($this->once())
            ->method('findBooksByCategoryId')
            ->with(130)
            ->willReturn([$this->createBookEntity()]);

        $bookCategoryRepository = $this->createMock(BookCategoryRepository::class);
        $bookCategoryRepository->expects($this->once())
            ->method('find')
            ->with(130)
            ->willReturn(new BookCategory());

        $service = new BookService($bookRepository, $bookCategoryRepository);
        $expected = new BookListResponse([$this->createBookItemModel()]);

        $this->assertEquals($expected, $service->getBooksByCategory(130));
    }
    private function createBookEntity(): Book
    {
        return (new Book())
            ->setId(123)
            ->setTitle('testbook')
            ->setSlug('test-book')
            ->setMeap(false)
            ->setAutors('tester')
            ->setImage('test.png')
            ->setCategories(new ArrayCollection())
            ->setPublicationDate(new \DateTimeImmutable('2020-10-20'));
    }

    private function createBookItemModel(): BookListItem
    {
        return (new BookListItem())
            ->setId(130)
            ->setTitle('testbook')
            ->setSlug('test-book')
            ->setMeap(false)
            ->setAuthors('tester')
            ->setImage('test.png')
            ->setPublicationDate('1602288000');
    }
}