<?php

namespace ContainerSdrGoLs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_RenderDocs_YamlService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.render_docs.yaml' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Render\Yaml\YamlOpenApiRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Render/OpenApiRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Render/Yaml/YamlOpenApiRenderer.php';

        return $container->privates['nelmio_api_doc.render_docs.yaml'] = new \Nelmio\ApiDocBundle\Render\Yaml\YamlOpenApiRenderer();
    }
}
