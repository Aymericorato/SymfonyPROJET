<?php

<<<<<<< Updated upstream:FMPS_projetSymfony/var/cache/dev/Container2oDCpG4/getDataCollector_Request_SessionCollectorService.php
namespace Container2oDCpG4;
=======
namespace ContainerVtARx3l;

>>>>>>> Stashed changes:FMPS_projetSymfony/var/cache/dev/ContainerVtARx3l/getDataCollector_Request_SessionCollectorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataCollector_Request_SessionCollectorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'data_collector.request.session_collector' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['data_collector.request.session_collector'] = \Closure::fromCallable([0 => ($container->privates['data_collector.request'] ?? $container->getDataCollector_RequestService()), 1 => 'collectSessionUsage']);
    }
}