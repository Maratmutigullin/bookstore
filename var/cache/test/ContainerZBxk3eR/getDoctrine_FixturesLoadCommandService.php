<?php

namespace ContainerZBxk3eR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_FixturesLoadCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/ORMPurgerFactory.php';

        $container->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand(($container->privates['doctrine.fixtures.loader'] ?? $container->load('getDoctrine_Fixtures_LoaderService')), ($container->services['doctrine'] ?? $container->load('getDoctrineService')), ['default' => ($container->privates['doctrine.fixtures.purger.orm_purger_factory'] ?? ($container->privates['doctrine.fixtures.purger.orm_purger_factory'] = new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()))]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }
}
