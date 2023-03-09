<?php

namespace App\Tests\Listener;

use App\Listener\ApiExceptionListener;
use App\Model\ErrorDebugDetails;
use App\Model\ErrorResponse;
use App\Service\ExeptionHandler\ExeptionMapping;
use App\Service\ExeptionHandler\ExeptionMappingResolver;
use App\Tests\AbstractTestCase;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Psr\Log\InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class ApiExeptionListenerTest extends AbstractTestCase
{
    private ExeptionMappingResolver $resolver;

    private LoggerInterface $logger;

    private SerializerInterface $serializer;

    public function setUp(): void
    {
        parent::setUp();
        $this->resolver = $this->createMock(ExeptionMappingResolver::class);
        $this->logger = $this->createMock(LoggerInterface::class);
        $this->serializer = $this->createMock(SerializerInterface::class);
    }

    public function testNon500MappingWithHiddenMesssage(): void
    {
        $mapping = ExeptionMapping::fromCode(Response::HTTP_NOT_FOUND);
        $ressponseMessage = Response::$statusTexts[$mapping->getCode()];
        $responseBody = json_encode(['error' => $ressponseMessage]);

        $this->resolver->expects($this->once())
            ->method('resolve')
            ->with(InvalidArgumentException::class)
            ->willReturn($mapping);

        $this->serializer->expects($this->once())
            ->method('serialize')
            ->with(new ErrorResponse($ressponseMessage), JsonEncoder::FORMAT)
            ->willReturn($responseBody);

        $event = $this->createEvent(new InvalidArgumentException('test'));

        //запускаем наш listener
        $this->runListener($event);

        $this->assertResponse(Response::HTTP_NOT_FOUND, $responseBody, $event->getResponse());
    }

    protected function assertResponse(int $expectedStatusCode, string $expectedBody, Response $actualResponse)
    {
        $this->assertEquals($expectedStatusCode, $actualResponse->getStatuscode());
        $this->assertInstanceOf(JsonResponse::class, $actualResponse);
        $this->assertJsonStringEqualsJsonString($expectedBody, $actualResponse->getContent());
    }

    private function runListener(ExceptionEvent $event, bool $isDebug = false): void
    {
        (new ApiExceptionListener($this->resolver, $this->logger, $this->serializer, $isDebug))($event);
    }

    public function createEvent(InvalidArgumentException $e): ExceptionEvent
    {
        return new ExceptionEvent(
            $this->createTestkernel(),
            new Request(),
            HttpKernelInterface::MAIN_REQUEST,
            $e
        );
    }

    public function createTestkernel(): HttpKernelInterface
    {
        return new class implements HttpKernelInterface {
            public function handle(Request $request, int $type = self::MAIN_REQUEST, bool $catch = true)
            {
                return new Response('test');
            }
        };
    }

    public function testNon500MappingWithPublicMessage(): void
    {
        $mapping = new ExeptionMapping(Response::HTTP_NOT_FOUND, false, false);
        $responseMessage = 'test';
        $responseBody = json_encode(['error' => $responseMessage]);

        $this->resolver->expects($this->once())
            ->method('resolve')
            ->with(InvalidArgumentException::class)
            ->willReturn($mapping);

        $this->serializer->expects($this->once())
            ->method('serialize')
            ->with(new ErrorResponse($responseMessage), JsonEncoder::FORMAT)
            ->willReturn($responseBody);

        $event = $this->createEvent(new InvalidArgumentException('test'));

        $this->runListener($event);

        $this->assertResponse(Response::HTTP_NOT_FOUND, $responseBody, $event->getResponse());
    }

    //проверяем что looger вызыыается
    public function testNon500LoggableMappingTriggersLogger(): void
    {
        $mapping = new ExeptionMapping(Response::HTTP_NOT_FOUND, false, true);
        $responseMessage = 'test';
        $responseBody = json_encode(['error' => $responseMessage]);

        $this->resolver->expects($this->once())
            ->method('resolve')
            ->with(InvalidArgumentException::class)
            ->willReturn($mapping);

        $this->serializer->expects($this->once())
            ->method('serialize')
            ->with(new ErrorResponse($responseMessage), JsonEncoder::FORMAT)
            ->willReturn($responseBody);

        $this->logger->expects($this->once())
            ->method('error');

        $event = $this->createEvent(new InvalidArgumentException('test'));

        $this->runListener($event);

        $this->assertResponse(Response::HTTP_NOT_FOUND, $responseBody, $event->getResponse());
    }

    public function test500IsLoggable(): void
    {
        $mapping = ExeptionMapping::fromCode(Response::HTTP_GATEWAY_TIMEOUT);
        $responseMessage = Response::$statusTexts[$mapping->getCode()];
        $responseBody = json_encode(['error' => $responseMessage]);

        $this->resolver->expects($this->once())
            ->method('resolve')
            ->with(InvalidArgumentException::class)
            ->willReturn($mapping);

        $this->serializer->expects($this->once())
            ->method('serialize')
            ->with(new ErrorResponse($responseMessage), JsonEncoder::FORMAT)
            ->willReturn($responseBody);

        $this->logger->expects($this->once())
            ->method('error')
            ->with('error message', $this->anything());

        $event = $this->createEvent(new InvalidArgumentException('error message'));

        $this->runListener($event);

        $this->assertResponse(Response::HTTP_GATEWAY_TIMEOUT, $responseBody, $event->getResponse());
    }


    public function test500IsDefaultWhenMappingNotFound(): void
    {
        $responseMessage = Response::$statusTexts[Response::HTTP_INTERNAL_SERVER_ERROR];
        $responseBody = json_encode(['error' => $responseMessage]);

        $this->resolver->expects($this->once())
            ->method('resolve')
            ->with(InvalidArgumentException::class)
            ->willReturn(null);

        $this->serializer->expects($this->once())
            ->method('serialize')
            ->with(new ErrorResponse($responseMessage), JsonEncoder::FORMAT)
            ->willReturn($responseBody);

        $this->logger->expects($this->once())
            ->method('error')
            ->with('error message', $this->anything());

        $event = $this->createExceptionEvent(new InvalidArgumentException('error message'));

        $this->runListener($event);

        $this->assertResponse(Response::HTTP_INTERNAL_SERVER_ERROR, $responseBody, $event->getResponse());
    }

    public function testShowTraceWhenDebug(): void
    {
        $mapping = ExeptionMapping::fromCode(Response::HTTP_NOT_FOUND);
        $responseMessage = 'error message';
        $responseBody = json_encode(['error' => $responseMessage, 'trace' => 'something']);

        $this->resolver->expects($this->once())
            ->method('resolve')
            ->with(InvalidArgumentException::class)
            ->willReturn($mapping);

        $this->serializer->expects($this->once())
            ->method('serialize')
            ->with(
                $this->callback(function (ErrorResponse $response) use ($responseMessage) {
                    return $response->getMessage() == $responseMessage &&
                        $response->getDetails() instanceof ErrorDebugDetails &&
                        !empty($response->getDetails()->getTrace());
                }),
                JsonEncoder::FORMAT
            )
            ->willReturn($responseBody);

        $event = $this->createExceptionEvent(new InvalidArgumentException($responseMessage));

        $this->runListener($event, true);

        $this->assertResponse(Response::HTTP_NOT_FOUND, $responseBody, $event->getResponse());
    }

    public function testIgnoreSecurityException(): void
    {
        $this->resolver->expects($this->never())
            ->method('resolve');

        $event = $this->createExceptionEvent(new AuthenticationException());
        $this->runListener($event, true);
    }
}