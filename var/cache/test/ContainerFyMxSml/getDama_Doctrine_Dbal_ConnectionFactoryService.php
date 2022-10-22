<?php

namespace ContainerFyMxSml;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDama_Doctrine_Dbal_ConnectionFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'dama.doctrine.dbal.connection_factory' shared service.
     *
     * @return \DAMA\DoctrineTestBundle\Doctrine\DBAL\StaticConnectionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/dama/doctrine-test-bundle/src/DAMA/DoctrineTestBundle/Doctrine/DBAL/StaticConnectionFactory.php';

        return $container->privates['dama.doctrine.dbal.connection_factory'] = new \DAMA\DoctrineTestBundle\Doctrine\DBAL\StaticConnectionFactory(($container->privates['dama.doctrine.dbal.connection_factory.inner'] ?? ($container->privates['dama.doctrine.dbal.connection_factory.inner'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))));
    }
}
