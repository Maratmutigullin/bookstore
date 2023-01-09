<?php
namespace App\Tests;

use Psr\Log\InvalidArgumentException;
use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Throwable;

abstract class AbstractTestCase extends TestCase
{
    protected function setEntityId(object $entity, int $value, $idField = 'id')
    {
        $class = new ReflectionClass($entity);
        $property = $class->getProperty($idField);
        $property->setAccessible(true);
        $property->setValue($entity, $value);
        $property->setAccessible(false);
    }

    protected function assertResponse(int $expectedStatusCode, string $expectedBody, Response $actualResponse)
    {
        $this->assertEquals($expectedStatusCode, $actualResponse->getStatuscode());
        $this->assertInstanceOf(JsonResponse::class, $actualResponse);
        $this->assertJsonStringEqualsJsonString($expectedBody, $actualResponse->getContent());
    }

    protected function createExceptionEvent(Throwable $e): ExceptionEvent
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
}