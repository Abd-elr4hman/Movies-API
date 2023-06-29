<?php

namespace ContainerSixVPcH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMoviesControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MoviesController' shared autowired service.
     *
     * @return \App\Controller\MoviesController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\MoviesController'] = $instance = new \App\Controller\MoviesController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'serializer' => '?',
        ]))->withContext('App\\Controller\\MoviesController', $container));

        return $instance;
    }
}
