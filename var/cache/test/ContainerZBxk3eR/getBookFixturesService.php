<?php

namespace ContainerZBxk3eR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookFixturesService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\DataFixtures\BookFixtures' shared autowired service.
     *
     * @return \App\DataFixtures\BookFixtures
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/DependentFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/BookFixtures.php';

        return $container->privates['App\\DataFixtures\\BookFixtures'] = new \App\DataFixtures\BookFixtures();
    }
}
