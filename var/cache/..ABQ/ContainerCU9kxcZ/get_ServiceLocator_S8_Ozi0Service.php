<?php

namespace ContainerCU9kxcZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S8_Ozi0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.S8.Ozi0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.S8.Ozi0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coli' => ['privates', '.errored..service_locator.S8.Ozi0.App\\Entity\\Colis', NULL, 'Cannot autowire service ".service_locator.S8.Ozi0": it references class "App\\Entity\\Colis" but no such service exists.'],
            'colisRepository' => ['privates', 'App\\Repository\\ColisRepository', 'getColisRepositoryService', true],
        ], [
            'coli' => 'App\\Entity\\Colis',
            'colisRepository' => 'App\\Repository\\ColisRepository',
        ]);
    }
}
