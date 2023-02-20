<?php
namespace App\Controller;

use App\Atribute\RequestBody;
use App\Model\SubscriberRequest;
use App\Service\SubscriberService;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Model\ErrorResponse;

class SubscribeController extends AbstractController
{
    public function __construct(private SubscriberService $subscriberService)
    {
    }

    /**
     * @OA\Response(
     *     response=200,
     *     description="Subscribe email to newsletter moiling list",
     * )
     * @OA\Response(
     *     response=409,
     *     description="Validation failed",
     *     @Model(type=ErrorResponse::class)
     * )
     * @OA\RequestBody(@Model(type=SubscriberRequest::class))
     */
    #[Route(path: 'api/v1/subscribe', methods: ['POST'])]
    public function action(#[RequestBody]SubscriberRequest $subscriberRequest): Response
    {
        $this->subscriberService->subscribe($subscriberRequest);
       return $this->json(null);
    }
}