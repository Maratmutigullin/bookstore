<?php

namespace ContainerFyMxSml;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDama_Doctrine_Dbal_PostConnectEventListener_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'dama.doctrine.dbal.post_connect_event_listener.default' shared service.
     *
     * @return \DAMA\DoctrineTestBundle\Doctrine\DBAL\PostConnectEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/dama/doctrine-test-bundle/src/DAMA/DoctrineTestBundle/Doctrine/DBAL/PostConnectEventListener.php';

        return $container->privates['dama.doctrine.dbal.post_connect_event_listener.default'] = new \DAMA\DoctrineTestBundle\Doctrine\DBAL\PostConnectEventListener();
    }
}
