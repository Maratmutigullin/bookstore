<?php

namespace Container68Wn6Fl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiExeptionListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Listener\ApiExeptionListener' shared autowired service.
     *
     * @return \App\Listener\ApiExeptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Listener/ApiExeptionListener.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ExeptionHandler/ExeptionMappingResolver.php';

        return $container->privates['App\\Listener\\ApiExeptionListener'] = new \App\Listener\ApiExeptionListener(new \App\Service\ExeptionHandler\ExeptionMappingResolver($container->parameters['exceptions']), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')), ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')), true);
    }
}
