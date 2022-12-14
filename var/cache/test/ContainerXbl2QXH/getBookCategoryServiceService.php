<?php

namespace ContainerXbl2QXH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookCategoryServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\BookCategoryService' shared autowired service.
     *
     * @return \App\Service\BookCategoryService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/BookCategoryService.php';

        return $container->privates['App\\Service\\BookCategoryService'] = new \App\Service\BookCategoryService(($container->privates['App\\Repository\\BookCategoryRepository'] ?? $container->load('getBookCategoryRepositoryService')));
    }
}
