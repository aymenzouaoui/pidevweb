<?php

namespace ContainerKicfle5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q3jtqTxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q3jtqTx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q3jtqTx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'documentexpedition' => ['privates', '.errored..service_locator.Q3jtqTx.App\\Entity\\Documentexpedition', NULL, 'Cannot autowire service ".service_locator.Q3jtqTx": it references class "App\\Entity\\Documentexpedition" but no such service exists.'],
        ], [
            'documentexpedition' => 'App\\Entity\\Documentexpedition',
        ]);
    }
}
