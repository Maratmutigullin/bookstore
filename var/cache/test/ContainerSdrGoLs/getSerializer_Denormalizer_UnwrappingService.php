<?php

namespace ContainerSdrGoLs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Denormalizer_UnwrappingService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.denormalizer.unwrapping' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/UnwrappingDenormalizer.php';

        return $container->privates['serializer.denormalizer.unwrapping'] = new \Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer(($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));
    }
}
