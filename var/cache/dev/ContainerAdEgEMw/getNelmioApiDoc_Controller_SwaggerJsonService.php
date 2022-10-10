<?php

namespace ContainerAdEgEMw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Controller_SwaggerJsonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'nelmio_api_doc.controller.swagger_json' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Controller\DocumentationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Controller/DocumentationController.php';

        return $container->services['nelmio_api_doc.controller.swagger_json'] = new \Nelmio\ApiDocBundle\Controller\DocumentationController(($container->services['nelmio_api_doc.render_docs'] ?? $container->load('getNelmioApiDoc_RenderDocsService')));
    }
}
