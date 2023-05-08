<?php

namespace ContainerKicfle5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4LxtSayService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4LxtSay' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4LxtSay'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competitionRepository' => ['privates', 'App\\Repository\\CompetitionRepository', 'getCompetitionRepositoryService', true],
        ], [
            'competitionRepository' => 'App\\Repository\\CompetitionRepository',
        ]);
    }
}
