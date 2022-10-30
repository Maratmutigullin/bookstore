<?php

namespace App\Service\ExeptionHandler;

use InvalidArgumentException;

class ExeptionMappingResolver
{
    /**
     * @var ExeptionMapping[]
     */
    private array $mappings = [];

    public function __construct(array $mappings)
    {
        foreach ($mappings as $class => $mapping) {
            //dump($mapping);die();
            if (empty($mapping['code'])) {
                throw new InvalidArgumentException('code is mandatory for class ' . $class);
            }
            $this->addMapping(
                $class,
                $mapping['code'],
                $mapping['hidden'] ?? true,
                $mapping['loggable'] ?? false
            );
        }
    }

    //нужно чтобы определять что это именно этот класс из services
    public function resolve(string $throwableClass): ?ExeptionMapping
    {
        $foundMapping = null;

        foreach ($this->mappings as $class => $mapping) {
            if ($throwableClass === $class || is_subclass_of($throwableClass, $class)) {
                $foundMapping = $mapping;
                break;
            }
        }

        return $foundMapping;
    }

    private function addMapping(string $class, int $code, bool $hidden, bool $loggable): void
    {
        $this->mappings[$class] = new ExeptionMapping($code, $hidden, $loggable);
    }
}