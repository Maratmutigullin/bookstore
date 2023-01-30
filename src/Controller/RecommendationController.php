<?php

namespace App\Controller;

use App\Service\RecommendationService;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Model\RecommendedListResponse;


class RecommendationController extends AbstractController
{
    public function __construct(private RecommendationService $recommendationService)
    {
    }

    /**
     * @OA\Response(
     *     response=200,
     *     description="Returns recommendations for the book",
     *     @Model(type=RecommendedListResponse::class)
     * )
     */
    #[Route(path: '/api/v1/book/{id}/recommendations', methods: ['GET'])]
    public function recommendationByBook(int $id): Response
    {
        return $this->json($this->recommendationService->getRecommendationsByBookId($id));
    }
}