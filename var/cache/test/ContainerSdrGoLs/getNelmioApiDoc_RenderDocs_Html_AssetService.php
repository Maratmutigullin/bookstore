<?php

namespace ContainerSdrGoLs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_RenderDocs_Html_AssetService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.render_docs.html.asset' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Render\Html\GetNelmioAsset
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Render/Html/GetNelmioAsset.php';

        return $container->privates['nelmio_api_doc.render_docs.html.asset'] = new \Nelmio\ApiDocBundle\Render\Html\GetNelmioAsset(($container->privates['twig.extension.assets'] ?? $container->load('getTwig_Extension_AssetsService')));
    }
}
