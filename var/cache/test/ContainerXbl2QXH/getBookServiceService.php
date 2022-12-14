<?php

namespace ContainerXbl2QXH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\BookService' shared autowired service.
     *
     * @return \App\Service\BookService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/BookService.php';

        return $container->privates['App\\Service\\BookService'] = new \App\Service\BookService(($container->privates['App\\Repository\\BookRepository'] ?? $container->load('getBookRepositoryService')), ($container->privates['App\\Repository\\BookCategoryRepository'] ?? $container->load('getBookCategoryRepositoryService')));
    }
}
