<?php


namespace App\Service;


use App\Entity\Book;
use App\Model\RecommendedBook;
use App\Model\RecommendedListResponse;
use App\Repository\BookRepository;
use App\Service\Recommendation\Model\RecommendationItem;
use App\Service\Recommendation\RecommendationApiService;

class RecommendationService
{
    private const MAX_DESCRIPTION_LENGTH = 150;

    public function __construct(private BookRepository $bookRepository, private RecommendationApiService $recommendationApiService)
    {

    }

    public function getRecommendationsByBookId(int $bookId): RecommendedListResponse
    {
        $ids = array_map(fn(RecommendationItem $item) => $item->getId(),
            $this->recommendationApiService->getRecommendationsByBookId($bookId)->getRecommendations()
        );

        return new RecommendedListResponse(
            array_map([$this, 'map'], $this->bookRepository->findBooksByIds($ids))
        );
    }

    public function map(Book $book): RecommendedBook
    {
        $description = $book->getDescription();
        $description = strlen($description) > self::MAX_DESCRIPTION_LENGTH ? substr($description, 0, self::MAX_DESCRIPTION_LENGTH - 3) . '...' : $description;
        return (new RecommendedBook())
            ->setId($book->getId())
            ->setImage($book->getImage())
            ->setTitle($book->getTitle())
            ->setSlug($book->getSlug())
            ->setShortDescription($description);
    }
}