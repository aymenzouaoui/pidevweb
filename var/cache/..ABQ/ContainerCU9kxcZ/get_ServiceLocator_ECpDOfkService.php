<?php

namespace ContainerCU9kxcZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ECpDOfkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ECpDOfk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ECpDOfk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annonce' => ['privates', '.errored..service_locator.ECpDOfk.App\\Entity\\Annonces', NULL, 'Cannot autowire service ".service_locator.ECpDOfk": it references class "App\\Entity\\Annonces" but no such service exists.'],
        ], [
            'annonce' => 'App\\Entity\\Annonces',
        ]);
    }
}
