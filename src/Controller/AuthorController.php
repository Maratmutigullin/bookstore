<?php

namespace App\Controller;

use App\Atribute\RequestBody;
use App\Model\Author\CreateBookRequest;
use App\Service\AuthorService;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Author\BookListResponse;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Model\ErrorResponse;
use App\Model\IdResponse;

class AuthorController extends AbstractController
{

    public function __construct(private AuthorService $authorService)
    {
    }

    /**
     * @OA\Tag(name="Author API")
     * @OA\Response(
     *     response=200,
     *     description="Get authors owned books",
     *     @Model(type=BookListResponse::class)
     * )
     */
    #[Route(path: 'api/v1/author/books', methods: ['GET'])]
    public function books(): Response
    {
        return $this->json($this->authorService->getBooks());
    }


    /**
     * @OA\Tag(name="Author API")
     * @OA\Response(
     *     response=200,
     *     description="Create a book",
     *     @Model(type=IdResponse::class)
     * )
     * @OA\Response(
     *     response=409,
     *     description="Validation failed",
     *     @Model(type=ErrorResponse::class)
     * )
     * @OA\RequestBody(@Model(type=CreateBookRequest::class))
     */
    #[Route(path: '/api/v1/author/book', methods: ['POST'])]
    public function createBook(#[RequestBody] CreateBookRequest $request): Response
    {
        return $this->json($this->authorService->createBook($request));
    }

    /**
     * @OA\Tag(name="Author API")
     * @OA\Response(
     *     response=200,
     *     description="Remove the book",
     *     @Model(type=BookListResponse::class)
     * )
     * @OA\Response(
     *     response=404,
     *     description="user  not found",
     *     @Model(type=ErrorResponse::class)
     * )
     */
    #[Route(path: 'api/v1/author/book/{id}', methods: ['DELETE'])]
    public function deleteBook(int $id): Response
    {
        $this->authorService->deleteBookById($id);
        return $this->json(null);
    }
}