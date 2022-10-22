<?php

namespace ContainerFyMxSml;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_RenderDocs_HtmlService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.render_docs.html' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Render\Html\HtmlOpenApiRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Render/OpenApiRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Render/Html/HtmlOpenApiRenderer.php';

        return $container->privates['nelmio_api_doc.render_docs.html'] = new \Nelmio\ApiDocBundle\Render\Html\HtmlOpenApiRenderer(($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')));
    }
}
