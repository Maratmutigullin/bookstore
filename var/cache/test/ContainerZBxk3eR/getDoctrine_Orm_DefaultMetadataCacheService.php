<?php

namespace ContainerZBxk3eR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultMetadataCacheService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \DAMA\DoctrineTestBundle\Doctrine\Cache\Psr6StaticArrayCache
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/dama/doctrine-test-bundle/src/DAMA/DoctrineTestBundle/Doctrine/Cache/Psr6StaticArrayCache.php';

        return $container->privates['doctrine.orm.default_metadata_cache'] = new \DAMA\DoctrineTestBundle\Doctrine\Cache\Psr6StaticArrayCache('587f9c1a84a2c77aac3086fb62c7450374000626');
    }
}
