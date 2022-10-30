<?php

namespace ContainerSdrGoLs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Describers_OpenapiPhp_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.describers.openapi_php.default' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Describer\OpenApiPhpDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Util/SetsContextTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Describer/OpenApiPhpDescriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Util/ControllerReflector.php';

        return $container->privates['nelmio_api_doc.describers.openapi_php.default'] = new \Nelmio\ApiDocBundle\Describer\OpenApiPhpDescriber(($container->privates['nelmio_api_doc.routes.default'] ?? $container->load('getNelmioApiDoc_Routes_DefaultService')), ($container->privates['nelmio_api_doc.controller_reflector'] ?? ($container->privates['nelmio_api_doc.controller_reflector'] = new \Nelmio\ApiDocBundle\Util\ControllerReflector($container))), ($container->privates['annotations.reader'] ?? $container->load('getAnnotations_ReaderService')), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
