<?php

namespace App\Tests\Service;

use App\Entity\Book;
use App\Entity\BookCategory;
use App\Entity\BookFormat;
use App\Entity\BookToBookFormat;
use App\Exception\BookCategoryNotFoundException;
use App\Model\BookCategory as BookCategoryModel;
use App\Model\BookDetails;
use App\Model\BookFormat as BookFormatModel;
use App\Model\BookListItem;
use App\Model\BookListResponse;
use App\Repository\BookCategoryRepository;
use App\Repository\BookRepository;
use App\Service\BookService;
use App\Service\Rating;
use App\Service\RatingService;
use App\Tests\AbstractTestCase;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;

class BooksServiceTest extends AbstractTestCase
{
    private BookRepository $bookRepository;

    private BookCategoryRepository $bookCategoryRepository;

    private RatingService $ratingService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->bookRepository = $this->createMock(BookRepository::class);
        $this->bookCategoryRepository = $this->createMock(BookCategoryRepository::class);
        $this->ratingService = $this->createMock(RatingService::class);
    }

    private function createBookService(): BookService
    {
        return new BookService(
            $this->bookRepository,
            $this->bookCategoryRepository,
            $this->ratingService
        );
    }

    public function testGetBooksByCategoryNotFound(): void
    {
        $this->bookCategoryRepository->expects($this->once())
            ->method('existsById')
            ->with(130)
            ->willReturn(false);

        $this->expectException(BookCategoryNotFoundException::class);

        $this->createBookService()->getBooksByCategory(130);

    }

    public function testGetBooksByCategory(): void
    {
        $this->bookRepository->expects($this->once())
            ->method('findPublishedBooksByCategoryId')
            ->with(130)
            ->willReturn([$this->createBookEntity()]);

        $this->bookCategoryRepository->expects($this->once())
            ->method('existsById')
            ->with(130)
            ->willReturn(true);

        $expected = new BookListResponse([$this->createBookItemModel()]);

        $this->assertEquals($expected, $this->createBookService()->getBooksByCategory(130));
    }

    public function testGetBooKById(): void
    {
        $this->bookRepository->expects($this->once())
            ->method('getPublishedById')
            ->with(123)
            ->willReturn($this->createBookEntity());

        $this->ratingService->expects($this->once())
            ->method('calcReviewRaringForBook')
            ->willReturn(new Rating(10, 5.5));

        $format = (new BookFormatModel())
            ->setId(1)
            ->setTitle('format')
            ->setDescription('description')
            ->setComment('comment')
            ->setPrice(123.55)
            ->setDiscountPercent(5);

        $expected = (new BookDetails())
            ->setId(1)
            ->setRating(5.5)
            ->setMeap(false)
            ->setReviews(10)
            ->setTitle('testbook')
            ->setSlug('test-book')
            ->setImage('test.png')
            ->setAuthors(['Tester'])
            ->setCategories([
                new BookCategoryModel(1, 'Category', 'category')
            ])
            ->setPublicationDate(1603152000)
            ->setFormats([$format]);

        $this->assertEquals($expected, $this->createBookService()->getBookById(123));
    }


    private function createBookEntity(): Book
    {
        $category = (new BookCategory())->setTitle('Category')->setSlug('category');
        $this->setEntityId($category, 1);

        $format = (new BookFormat())
            ->setTitle('format')
            ->setDescription('description')
            ->setComment('comment');

        $this->setEntityId($format, 1);

        $join = (new BookToBookFormat())
            ->setPrice(123.55)
            ->setFormat($format)
            ->setDiscountPercent(5);
        $this->setEntityId($join, 1);

        $book = (new Book())
            ->setTitle('testbook')
            ->setSlug('test-book')
            ->setIsbn('123321')
            ->setDescription('test description')
            ->setMeap(false)
            ->setAutors(['Tester'])
            ->setImage('test.png')
            ->setCategories(new ArrayCollection([$category]))
            ->setFormats(new ArrayCollection([$join]))
            ->setPublicationDate(new DateTimeImmutable('2020-10-20'));

        $this->setEntityId($book, 1);
        return $book;
    }

    private function createBookItemModel(): BookListItem
    {
        return (new BookListItem())
            ->setId(1)
            ->setTitle('testbook')
            ->setSlug('test-book')
            ->setMeap(false)
            ->setAuthors(['Tester'])
            ->setImage('test.png')
            ->setPublicationDate('1603152000');
    }
}