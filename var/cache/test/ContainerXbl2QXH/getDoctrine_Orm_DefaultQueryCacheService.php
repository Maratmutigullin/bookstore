<?php

namespace ContainerXbl2QXH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultQueryCacheService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.default_query_cache' shared service.
     *
     * @return \DAMA\DoctrineTestBundle\Doctrine\Cache\Psr6StaticArrayCache
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/dama/doctrine-test-bundle/src/DAMA/DoctrineTestBundle/Doctrine/Cache/Psr6StaticArrayCache.php';

        return $container->privates['doctrine.orm.default_query_cache'] = new \DAMA\DoctrineTestBundle\Doctrine\Cache\Psr6StaticArrayCache('a0340e49ab711cf406922588df061b847421a1bf');
    }
}
