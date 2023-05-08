<?php

namespace ContainerKicfle5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QaH6cEmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QaH6cEm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QaH6cEm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'gift' => ['privates', '.errored..service_locator.QaH6cEm.App\\Entity\\Gifts', NULL, 'Cannot autowire service ".service_locator.QaH6cEm": it references class "App\\Entity\\Gifts" but no such service exists.'],
        ], [
            'gift' => 'App\\Entity\\Gifts',
        ]);
    }
}
