<?php

namespace App\Tests\Service\ExeptionHandler;

use App\Service\ExeptionHandler\ExeptionMappingResolver;
use App\Tests\AbstractTestCase;
use InvalidArgumentException;
use LogicException;

class ExeptionMappingResolverTest extends AbstractTestCase
{

    public function testThrowsExceptionOnEmptyCode(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new ExeptionMappingResolver(['someClass' => ['hidden' => true]]);
    }

    public function testResolveReturnsNullWheNotFound(): void
    {
        $resolve = new ExeptionMappingResolver([]);
        $this->assertNull($resolve->resolve(InvalidArgumentException::class));
    }

    public function testResolvesClassItself(): void
    {
        $resolve = new ExeptionMappingResolver([InvalidArgumentException::class => ['code' => 400]]);
        $mapping = $resolve->resolve(InvalidArgumentException::class);
        $this->assertEquals(400, $mapping->getCode());

    }

    public function testResolvesSubClass(): void
    {
        $resolver = new ExeptionMappingResolver([LogicException::class => ['code' => 500]]);
        $mapping = $resolver->resolve(InvalidArgumentException::class);

        $this->assertEquals(500, $mapping->getCode());
    }

    public function testResolvesHidden(): void
    {
        $resolver = new ExeptionMappingResolver([LogicException::class => ['code' => 500, 'hidden' => false]]);
        $mapping = $resolver->resolve(LogicException::class);

        $this->assertFalse($mapping->isHidden());
    }
}
