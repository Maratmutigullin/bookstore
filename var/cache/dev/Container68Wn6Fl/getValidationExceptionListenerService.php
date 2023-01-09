<?php

namespace Container68Wn6Fl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidationExceptionListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Listener\ValidationExceptionListener' shared autowired service.
     *
     * @return \App\Listener\ValidationExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Listener/ValidationExceptionListener.php';

        return $container->privates['App\\Listener\\ValidationExceptionListener'] = new \App\Listener\ValidationExceptionListener(($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')));
    }
}
