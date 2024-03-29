<?php

namespace App\Listener;

use App\Model\ErrorDebugDetails;
use App\Model\ErrorResponse;
use App\Service\ExeptionHandler\ExeptionMapping;
use App\Service\ExeptionHandler\ExeptionMappingResolver;
use App\Service\Recommendation\Exception\AccessDeniedException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Throwable;

class ApiExceptionListener
{
    public function __construct(
        private ExeptionMappingResolver $resolver,
        private LoggerInterface $logger,
        private SerializerInterface $serializer,
        private bool $isDebug)
    {
    }

    public function __invoke(ExceptionEvent $event): void
    {
        $throwable = $event->getThrowable();
        if($this->isSecurityException($throwable)){
            return ;
        }


        $mapping = $this->resolver->resolve(get_class($throwable));
        if (null === $mapping) {
            $mapping = ExeptionMapping::fromCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        if ($mapping->getCode() >= Response::HTTP_INTERNAL_SERVER_ERROR || $mapping->isLoggable()) {
            $this->logger->error($throwable->getMessage(), [
                'trace' => $throwable->getTraceAsString(),
                'previous' => null !== $throwable->getPrevious() ? $throwable->getPrevious()->getMessage() : '',
            ]);
        }

        //сообщение пользователю
        $message = $mapping->isHidden() && !$this->isDebug
            ? Response::$statusTexts[$mapping->getCode()]
            : $throwable->getMessage();

        $details = $this->isDebug ? new ErrorDebugDetails($throwable->getTraceAsString()) : null;
        //тело ответа
        $data = $this->serializer->serialize(new ErrorResponse($message, $details), JsonEncoder::FORMAT);

        $response = new JsonResponse($data, $mapping->getCode(), [], true);

        //назначаем этот response клиенту
        $event->setResponse($response);
    }

    public function isSecurityException(Throwable $throwable): bool
    {
        return $throwable instanceof AuthenticationException;
    }

}