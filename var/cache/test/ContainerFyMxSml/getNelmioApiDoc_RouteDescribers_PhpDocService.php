<?php

namespace ContainerFyMxSml;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_RouteDescribers_PhpDocService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.route_describers.php_doc' shared service.
     *
     * @return \Nelmio\ApiDocBundle\RouteDescriber\PhpDocDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/RouteDescriber/RouteDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/RouteDescriber/RouteDescriberTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/RouteDescriber/PhpDocDescriber.php';

        return $container->privates['nelmio_api_doc.route_describers.php_doc'] = new \Nelmio\ApiDocBundle\RouteDescriber\PhpDocDescriber();
    }
}
