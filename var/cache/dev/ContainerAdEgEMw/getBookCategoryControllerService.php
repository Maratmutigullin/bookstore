<?php

namespace ContainerAdEgEMw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookCategoryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BookCategoryController' shared autowired service.
     *
     * @return \App\Controller\BookCategoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BookCategoryController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/BookCategoryService.php';

        $container->services['App\\Controller\\BookCategoryController'] = $instance = new \App\Controller\BookCategoryController(new \App\Service\BookCategoryService(($container->privates['App\\Repository\\BookCategoryRepository'] ?? $container->load('getBookCategoryRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\BookCategoryController', $container));

        return $instance;
    }
}
