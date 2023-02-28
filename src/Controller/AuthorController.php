<?php

namespace App\Controller;

use App\Attribute\RequestBody;
use App\Attribute\RequestFile;
use App\Model\Author\CreateBookRequest;
use App\Security\Voter\AuthorBookVoter;
use App\Service\AuthorBookService;
use App\Service\BookPublishService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Author\BookListResponse;
use App\Model\Author\PublishBookRequest;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Model\ErrorResponse;
use App\Model\IdResponse;
use App\Model\Author\UploadCoverResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

class AuthorController extends AbstractController
{

    public function __construct(private AuthorBookService $authorService, private BookPublishService $bookPublishService)
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
    public function books(#[CurrentUser] UserInterface $user): Response
    {
        //аннотация #[CurrentUser] позволяет достать User из запроса
        //если все норм срабатывает AuthorBookVoter
        return $this->json($this->authorService->getBooks($user));
    }

    /**
     * @OA\Tag(name="Author API")
     * @OA\Response(
     *     response=200,
     *     description="Publish a book",
     * )
     * @OA\RequestBody(@Model(type=PublishBookRequest::class))
     */
    #[Route(path: '/api/v1/author/book/{id}/publish', methods: ['POST'])]
    #[IsGranted(AuthorBookVoter::IS_AUTHOR, subject: 'id')]
    public function publish(int $id, #[RequestBody] PublishBookRequest $request): Response
    {
        $this->bookPublishService->publish($id, $request);
        return $this->json(null);
    }


    /**
     * @OA\Tag(name="Author API")
     * @OA\Response(
     *     response=200,
     *     description="Unpublish a book",
     * )
     */
    #[Route(path: '/api/v1/author/book/{id}/unpublish', methods: ['POST'])]
    public function unpublish(int $id): Response
    {
        $this->bookPublishService->unpublish($id);
        return $this->json(null);
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
    public function createBook(#[RequestBody] CreateBookRequest $request, #[CurrentUser] UserInterface $user): Response
    {
        return $this->json($this->authorService->createBook($request, $user));
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
    #[IsGranted(AuthorBookVoter::IS_AUTHOR, subject: 'id')]
    public function deleteBook(int $id): Response
    {
        $this->authorService->deleteBookById($id);
        return $this->json(null);
    }

    /**
     * @OA\Tag(name="Author API")
     * @OA\Response(
     *     response=200,
     *     description="Upload book cover",
     *     @Model(type=UploadCoverResponse::class)
     * )
     * @OA\Response(
     *     response="400",
     *     description="Validation failed",
     *     @Model(type=ErrorResponse::class)
     * )
     * @param int $id
     * @param UploadedFile $file
     * @return Response
     */
    #[Route(path: '/api/v1/author/book/{id}/uploadCover', methods: ['POST'])]
    #[IsGranted(AuthorBookVoter::IS_AUTHOR, subject: 'id')]
    public function uploadCover(
        int $id,
        #[RequestFile(field: 'cover', constraints: [
           // new NotNull(),
           // new Image(maxSize: '1M', mimeTypes: ['image/jpeg', 'image/png', 'image/jpg'])
        ])] UploadedFile $file
    ): Response {
        return $this->json($this->authorService->uploadCover($id, $file));
    }
}