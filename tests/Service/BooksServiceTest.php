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
use App\Tests\MockUtils;
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
            ->setComment(null)
            ->setPrice(123.55)
            ->setDiscountPercent(5);

        $expected = (new BookDetails())
            ->setId(1)
            ->setRating(5.5)
            ->setReviews(10)
            ->setTitle('Test book')
            ->setSlug('test-book')
            ->setImage('http://localhost.png')
            ->setAuthors(['Tester'])
            ->setCategories([
                new BookCategoryModel(1, 'Devices', 'devices')
            ])
            ->setPublicationDate(1602288000)
            ->setFormats([$format]);

        $this->assertEquals($expected, $this->createBookService()->getBookById(123));
    }


    private function createBookEntity(): Book
    {
        $category = MockUtils::createBookCategory();
        $this->setEntityId($category, 1);

        $format = MockUtils::createBookFormat();
        $this->setEntityId($format, 1);

        $book = MockUtils::createBook()->setCategories(new ArrayCollection([$category]));
        $this->setEntityId($book, 1);

        $join = MockUtils::createBookFormatLink($book, $format);
        $this->setEntityId($join, 1);

        $book->setFormats(new ArrayCollection([$join]));

        return $book;
    }

    private function createBookItemModel(): BookListItem
    {
        return (new BookListItem())
            ->setId(1)
            ->setTitle('Test book')
            ->setSlug('test-book')
            ->setAuthors(['Tester'])
            ->setImage('http://localhost.png')
            ->setPublicationDate('1602288000');
    }
}