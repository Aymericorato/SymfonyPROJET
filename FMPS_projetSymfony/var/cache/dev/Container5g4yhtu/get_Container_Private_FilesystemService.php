<?php

<<<<<<< Updated upstream:FMPS_projetSymfony/var/cache/dev/Container5g4yhtu/get_Container_Private_FilesystemService.php
namespace Container5g4yhtu;
=======
namespace ContainerXXKA8xZ;

>>>>>>> Stashed changes:FMPS_projetSymfony/var/cache/dev/ContainerXXKA8xZ/get_Container_Private_FilesystemService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_FilesystemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.container.private.filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';

        return $container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
}