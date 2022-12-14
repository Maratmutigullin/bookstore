<?php

namespace ContainerXbl2QXH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnection_ConfigurationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.dbal.default_connection.configuration' shared service.
     *
     * @return \Doctrine\DBAL\Configuration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Driver/Middleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Logging/Middleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Middleware/ConnectionNameAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Middleware/DebugMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/dama/doctrine-test-bundle/src/DAMA/DoctrineTestBundle/Doctrine/DBAL/Middleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Middleware/Debug/DebugDataHolder.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Middleware/BacktraceDebugDataHolder.php';

        $container->privates['doctrine.dbal.default_connection.configuration'] = $instance = new \Doctrine\DBAL\Configuration();

        $a = new \Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware(($container->privates['doctrine.debug_data_holder'] ?? ($container->privates['doctrine.debug_data_holder'] = new \Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder([]))), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
        $a->setConnectionName('default');

        $instance->setMiddlewares([0 => ($container->privates['dama.doctrine.dbal.middleware'] ?? ($container->privates['dama.doctrine.dbal.middleware'] = new \DAMA\DoctrineTestBundle\Doctrine\DBAL\Middleware())), 1 => new \Doctrine\DBAL\Logging\Middleware(($container->privates['monolog.logger.doctrine'] ?? $container->load('getMonolog_Logger_DoctrineService'))), 2 => $a]);

        return $instance;
    }
}
