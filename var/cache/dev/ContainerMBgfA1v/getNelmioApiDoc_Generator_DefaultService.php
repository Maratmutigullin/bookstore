<?php

namespace ContainerMBgfA1v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Generator_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'nelmio_api_doc.generator.default' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ApiDocGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/ApiDocGenerator.php';

        $container->services['nelmio_api_doc.generator.default'] = $instance = new \Nelmio\ApiDocBundle\ApiDocGenerator(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['nelmio_api_doc.describers.config'] ?? $container->load('getNelmioApiDoc_Describers_ConfigService'));
            yield 1 => ($container->privates['nelmio_api_doc.describers.config.default'] ?? ($container->privates['nelmio_api_doc.describers.config.default'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber([], true)));
            yield 2 => ($container->privates['nelmio_api_doc.describers.openapi_php.default'] ?? $container->load('getNelmioApiDoc_Describers_OpenapiPhp_DefaultService'));
            yield 3 => ($container->privates['nelmio_api_doc.describers.route.default'] ?? $container->load('getNelmioApiDoc_Describers_Route_DefaultService'));
            yield 4 => ($container->privates['nelmio_api_doc.describers.default'] ?? ($container->privates['nelmio_api_doc.describers.default'] = new \Nelmio\ApiDocBundle\Describer\DefaultDescriber()));
        }, 5), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['nelmio_api_doc.model_describers.enum'] ?? ($container->privates['nelmio_api_doc.model_describers.enum'] = new \Nelmio\ApiDocBundle\ModelDescriber\EnumModelDescriber()));
            yield 1 => ($container->privates['nelmio_api_doc.model_describers.object'] ?? $container->load('getNelmioApiDoc_ModelDescribers_ObjectService'));
        }, 2));

        $instance->setAlternativeNames([]);
        $instance->setMediaTypes([0 => 'json']);
        $instance->setLogger(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }
}
