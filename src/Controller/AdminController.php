<?php

namespace App\Controller;

use App\Service\RoleService;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Model\ErrorResponse;

class AdminController extends AbstractController
{
    public function __construct(private RoleService $roleService)
    {
    }

    /**
     * @OA\Response(
     *     response=200,
     *     description="Grants ROLE_AUTHOR to a user",
     * )
     * @OA\Response(
     *     response=404,
     *     description="user  not found",
     *     @Model(type=ErrorResponse::class)
     * )
     */
    #[Route(path: 'api/v1/admin/grantAuthor/{userId}', methods: ['POST'])]
    public function grantAuthor($userId): Response
    {
        $this->roleService->grandAuthor($userId);
        return $this->json(null);
    }
}