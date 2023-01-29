<?php

namespace App\Tests\Service;

use App\Repository\ReviewRepository;
use App\Service\RatingService;
use App\Tests\AbstractTestCase;
use PHPUnit\Framework\TestCase;

class RatingServiceTest extends AbstractTestCase
{
    private ReviewRepository $reviewRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->reviewRepository = $this->createMock(ReviewRepository::class);
    }

    /**
     * @return array
     */
    public function provider(): array
    {
        return [
            [25, 20, 1.25],
            [0, 5, 0]
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testCalcReviewRaringForBook(int $repositoryRatingSum, int $total, float $expectedRating): void
    {
        $this->reviewRepository->expects($this->once())
            ->method('getBookTotalRatingSum')
            ->with(1)
            ->willReturn($repositoryRatingSum);

        $actual = (new RatingService($this->reviewRepository))->calcReviewRaringForBook(1, $total);
        $this->assertEquals($expectedRating, $actual);

    }

    /**
     * @dataProvider provider
     */
    public function testCalcReviewRaringForBookZeroTotal(): void
    {
        $this->reviewRepository->expects($this->never())->method('getBookTotalRatingSum');

        $this->assertEquals(
            0,
            (new RatingService($this->reviewRepository))->calcReviewRaringForBook(1, 0)
    );

    }
}