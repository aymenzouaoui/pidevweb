<?php

namespace ContainerKicfle5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7J6ZkRFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7J6ZkRF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7J6ZkRF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'vehiculeRepository' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService', true],
        ], [
            'entityManager' => '?',
            'paginator' => '?',
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
            'vehiculeRepository' => 'App\\Repository\\VehiculeRepository',
        ]);
    }
}
