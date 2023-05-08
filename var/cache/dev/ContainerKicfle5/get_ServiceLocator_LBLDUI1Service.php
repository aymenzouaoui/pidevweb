<?php

namespace ContainerKicfle5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LBLDUI1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lBLDUI1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lBLDUI1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'repository' => ['privates', 'App\\Repository\\CompetitionRepository', 'getCompetitionRepositoryService', true],
        ], [
            'normalizer' => '?',
            'repository' => 'App\\Repository\\CompetitionRepository',
        ]);
    }
}
