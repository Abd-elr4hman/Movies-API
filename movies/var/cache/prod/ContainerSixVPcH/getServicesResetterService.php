<?php

namespace ContainerSixVPcH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends App_KernelProdContainer
{
    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (false) {
                yield 'cache.validator' => null;
            }
            if (isset($container->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($container->privates['cache.serializer'] ?? null);
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (isset($container->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? null);
            }
            if (false) {
                yield 'cache.asset_mapper' => null;
            }
            if (false) {
                yield 'cache.scheduler' => null;
            }
            if (false) {
                yield 'debug.stopwatch' => null;
            }
            if (isset($container->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($container->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (isset($container->privates['session_listener'])) {
                yield 'session_listener' => ($container->privates['session_listener'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
        }, fn () => 0 + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (false) + (int) (isset($container->privates['cache.serializer'])) + (int) (isset($container->privates['cache.annotations'])) + (int) (isset($container->privates['cache.property_info'])) + (int) (false) + (int) (false) + (int) (false) + (int) (isset($container->privates['doctrine.result_cache_pool'])) + (int) (isset($container->privates['doctrine.system_cache_pool'])) + (int) (isset($container->privates['session_listener'])) + (int) (isset($container->services['doctrine']))), ['cache.app' => ['reset'], 'cache.system' => ['reset'], 'cache.validator' => ['reset'], 'cache.serializer' => ['reset'], 'cache.annotations' => ['reset'], 'cache.property_info' => ['reset'], 'cache.asset_mapper' => ['reset'], 'cache.scheduler' => ['reset'], 'debug.stopwatch' => ['reset'], 'doctrine.result_cache_pool' => ['reset'], 'doctrine.system_cache_pool' => ['reset'], 'session_listener' => ['reset'], 'doctrine' => ['reset']]);
    }
}