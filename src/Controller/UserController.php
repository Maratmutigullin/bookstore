<?php


namespace App\Controller;

use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\BookListResponse;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\CurrentUser;


class UserController extends AbstractController
{
    /**
     * @OA\Response(
     *     response=200,
     *     description="Returns published books inside a category",
     *     @Model(type=BookListResponse::class)
     * )
     */
    #[Route(path: 'api/v1/user/me', methods: ['GET'])]
    public function me(#[CurrentUser] UserInterface $user): Response
    {
        return $this->json($user);
    }
}