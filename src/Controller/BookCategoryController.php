<?php


namespace App\Controller;

use App\Service\BookCategoryService;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\BookCategoryListResponse;


class BookCategoryController extends AbstractController
{
    public function __construct(private BookCategoryService $bookCategoryService)
    {

    }

    /**
     * @OA\Response(
     *     response=200,
     *     description="Returns book categories",
     *     @Model(type=BookCategoryListResponse::class)
     * )
     */
    #[Route('api/v1/book/categories', methods: ['GET'])]
    public function categories(): Response
    {
        return $this->json($this->bookCategoryService->getCategories());
    }
}