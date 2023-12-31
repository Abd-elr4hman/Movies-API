<?php

namespace ContainerSixVPcH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UQaMK06Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.uQaMK06' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uQaMK06'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'movieRepository' => ['privates', 'App\\Repository\\MovieRepository', 'getMovieRepositoryService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'em' => '?',
            'movieRepository' => 'App\\Repository\\MovieRepository',
            'serializer' => '?',
        ]);
    }
}
