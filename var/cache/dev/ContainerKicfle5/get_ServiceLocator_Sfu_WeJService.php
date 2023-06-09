<?php

namespace ContainerKicfle5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sfu_WeJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Sfu.weJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Sfu.weJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'paginator' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
