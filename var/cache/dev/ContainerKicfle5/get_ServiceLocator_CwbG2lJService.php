<?php

namespace ContainerKicfle5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CwbG2lJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CwbG2lJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CwbG2lJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'giftsRepository' => ['privates', 'App\\Repository\\GiftsRepository', 'getGiftsRepositoryService', true],
        ], [
            'giftsRepository' => 'App\\Repository\\GiftsRepository',
        ]);
    }
}
