<?php

namespace App\Tests\Service;

use App\Entity\Review;
use App\Model\ReviewPage;
use App\Repository\ReviewRepository;
use App\Service\RatingService;
use App\Service\ReviewService;
use App\Tests\AbstractTestCase;
use ArrayIterator;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ReviewServiceTest extends AbstractTestCase
{
    private ReviewRepository $reviewRepository;

    private RatingService $ratingService;

    private const PER_PAGE = 5;

    private const BOOK_ID = 1;

    protected function setUp(): void
    {
        parent::setUp();
        $this->reviewRepository = $this->createMock(ReviewRepository::class);
        $this->ratingService = $this->createMock(RatingService::class);
    }

    public function dataProvider(): array
    {
        return [
            [0, 0],
            [-1, 0],
            [-20, 0]
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testGetReviewPageByBookIdInvalidPage(int $page, int $offset)
    {
        $this->ratingService->expects($this->once())
            ->method('calcReviewRaringForBook')
            ->with(self::BOOK_ID, 0)
            ->willReturn(0.0);

        $this->reviewRepository->expects($this->once())
            ->method('getPageByBookId')
            ->with(self::BOOK_ID, $offset, 5)
            ->willReturn(new ArrayIterator());

        $service = new ReviewService($this->reviewRepository, $this->ratingService);
        $expected = (new ReviewPage())
            ->setTotal(0)
            ->setRating(0)
            ->setPage($page)
            ->setPages(0)
            ->setPerPage(self::PER_PAGE)
            ->setItems([]);

        $this->assertEquals($expected, $service->getReviewPageByBookId(self::BOOK_ID, $page));
    }

    public function testGetReviewPageByBookId()
    {
        $this->ratingService->expects($this->once())
            ->method('calcReviewRaringForBook')
            ->with(self::BOOK_ID, 1)
            ->willReturn(4.0);

        $entity = (new Review())
            ->setAuthor('tester')
            ->setContent('test content')
            ->setCreatedAt(new DateTimeImmutable('2020-10-10'))
            ->setReating(4);

        $this->setEntityId($entity, 1);

        $this->reviewRepository->expects($this->once())
            ->method('getPageByBookId')
            ->with(self::BOOK_ID, 0, 5)
            ->willReturn(new ArrayIterator([$entity]));

        $service = new ReviewService($this->reviewRepository, $this->ratingService);
        $expected = (new ReviewPage())
            ->setTotal(1)
            ->setRating(4)
            ->setPage(1)
            ->setPages(1)
            ->setPerPage(self::PER_PAGE)
            ->setItems([
                (new \App\Model\Review())
                    ->setId(1)
                    ->setRating(4)
                    ->setCreatedAt(1602288000)
                    ->setContent('test content')
                    ->setAuthor('tester'),
            ]);

        $this->assertEquals($expected, $service->getReviewPageByBookId(self::BOOK_ID, 1));
    }
}
