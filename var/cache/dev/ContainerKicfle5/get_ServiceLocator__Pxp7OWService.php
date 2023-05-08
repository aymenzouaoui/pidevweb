<?php

namespace ContainerKicfle5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Pxp7OWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..Pxp7OW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..Pxp7OW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annoncesRepository' => ['privates', 'App\\Repository\\AnnoncesRepository', 'getAnnoncesRepositoryService', true],
            'cr' => ['privates', 'App\\Repository\\ColisRepository', 'getColisRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'annoncesRepository' => 'App\\Repository\\AnnoncesRepository',
            'cr' => 'App\\Repository\\ColisRepository',
            'entityManager' => '?',
        ]);
    }
}
