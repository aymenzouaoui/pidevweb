<?php

namespace ContainerKicfle5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AAfibv8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aAfibv8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aAfibv8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'colisRepository' => ['privates', 'App\\Repository\\DocumentexpeditionRepository', 'getDocumentexpeditionRepositoryService', true],
            'documentexpedition' => ['privates', '.errored..service_locator.aAfibv8.App\\Entity\\Documentexpedition', NULL, 'Cannot autowire service ".service_locator.aAfibv8": it references class "App\\Entity\\Documentexpedition" but no such service exists.'],
        ], [
            'colisRepository' => 'App\\Repository\\DocumentexpeditionRepository',
            'documentexpedition' => 'App\\Entity\\Documentexpedition',
        ]);
    }
}
