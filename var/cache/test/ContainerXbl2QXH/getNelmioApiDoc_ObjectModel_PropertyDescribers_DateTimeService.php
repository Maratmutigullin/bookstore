<?php

namespace ContainerXbl2QXH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_ObjectModel_PropertyDescribers_DateTimeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.object_model.property_describers.date_time' shared service.
     *
     * @return \Nelmio\ApiDocBundle\PropertyDescriber\DateTimePropertyDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/PropertyDescriber/PropertyDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/PropertyDescriber/NullablePropertyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/PropertyDescriber/DateTimePropertyDescriber.php';

        return $container->privates['nelmio_api_doc.object_model.property_describers.date_time'] = new \Nelmio\ApiDocBundle\PropertyDescriber\DateTimePropertyDescriber();
    }
}