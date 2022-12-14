<?php

namespace ContainerXbl2QXH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExeptionMappingResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\ExeptionHandler\ExeptionMappingResolver' shared autowired service.
     *
     * @return \App\Service\ExeptionHandler\ExeptionMappingResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/ExeptionHandler/ExeptionMappingResolver.php';

        return $container->privates['App\\Service\\ExeptionHandler\\ExeptionMappingResolver'] = new \App\Service\ExeptionHandler\ExeptionMappingResolver($container->parameters['exceptions']);
    }
}
