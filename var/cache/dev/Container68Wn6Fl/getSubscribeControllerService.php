<?php

namespace Container68Wn6Fl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubscribeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SubscribeController' shared autowired service.
     *
     * @return \App\Controller\SubscribeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SubscribeController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/SubscriberService.php';

        $container->services['App\\Controller\\SubscribeController'] = $instance = new \App\Controller\SubscribeController(new \App\Service\SubscriberService(($container->privates['App\\Repository\\SubscriberRepository'] ?? $container->load('getSubscriberRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'))));

        $instance->setContainer(($container->privates['.service_locator.ULv2zL4'] ?? $container->load('get_ServiceLocator_ULv2zL4Service'))->withContext('App\\Controller\\SubscribeController', $container));

        return $instance;
    }
}
