<?php

namespace ContainerQSoGpxJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BookController' shared autowired service.
     *
     * @return \App\Controller\BookController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BookController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/BookService.php';

        $container->services['App\\Controller\\BookController'] = $instance = new \App\Controller\BookController(new \App\Service\BookService(($container->privates['App\\Repository\\BookRepository'] ?? $container->load('getBookRepositoryService')), ($container->privates['App\\Repository\\BookCategoryRepository'] ?? $container->load('getBookCategoryRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\BookController', $container));

        return $instance;
    }
}