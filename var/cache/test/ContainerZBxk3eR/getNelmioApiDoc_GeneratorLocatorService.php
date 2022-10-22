<?php

namespace ContainerZBxk3eR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_GeneratorLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.generator_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['nelmio_api_doc.generator_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'default' => ['services', 'nelmio_api_doc.generator.default', 'getNelmioApiDoc_Generator_DefaultService', true],
        ], [
            'default' => '?',
        ]);
    }
}
