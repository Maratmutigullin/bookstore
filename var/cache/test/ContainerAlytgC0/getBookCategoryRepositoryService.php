<?php

namespace ContainerAlytgC0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookCategoryRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Repository\BookCategoryRepository' shared autowired service.
     *
     * @return \App\Repository\BookCategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/BookCategoryRepository.php';

        return $container->privates['App\\Repository\\BookCategoryRepository'] = new \App\Repository\BookCategoryRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
