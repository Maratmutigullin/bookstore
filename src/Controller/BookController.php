<?php


namespace App\Controller;

use App\Service\BookService;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\BookListResponse;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Model\ErrorResponse;
use App\Model\BookDetails;


class BookController extends AbstractController
{
    public function __construct(private BookService $bookService)
    {
    }

    /**
     * @OA\Response(
     *     response=200,
     *     description="Returns published books inside a category",
     *     @Model(type=BookListResponse::class)
     * )
     * @OA\Response(
     *     response="404",
     *     description="book category not found",
     *     @Model(type=ErrorResponse::class)
     * )
     */
    #[Route(path: 'api/v1/category/{id}/books', methods: ['GET'])]
    public function booksByCategory(int $id): Response
    {
        return $this->json($this->bookService->getBooksByCategory($id));
    }

    /**
     * @OA\Response(
     *     response=200,
     *     description="Returns books detail information",
     *     @Model(type=BookListResponse::class)
     * )
     * @OA\Response(
     *     response="404",
     *     description="book not found",
     *     @Model(type=ErrorResponse::class)
     * )
     */
    #[Route(path: 'api/v1/book/{id}', methods: ['GET'])]
    public function booksById(int $id): Response
    {
        return $this->json($this->bookService->getBookById($id));
    }
}
