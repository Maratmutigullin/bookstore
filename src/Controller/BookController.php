<?php


namespace App\Controller;

use App\Exception\BookCategoryNotFoundExeption;
use App\Service\BookService;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\BookListResponse;
use Nelmio\ApiDocBundle\Annotation\Model;


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
     */
    #[Route(path: 'api/v1/category/{id}/books', methods: ['GET'])]
    public function booksByCategory(int $id): Response
    {
        try {
            return $this->json($this->bookService->getBooksByCategory($id));
        } catch (BookCategoryNotFoundExeption $exception) {
            throw new HttpException($exception->getCode(), $exception->getMessage());
        }
    }
}

//4 урок 29:52 закончил