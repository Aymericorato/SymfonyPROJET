<?php

<<<<<<< Updated upstream:FMPS_projetSymfony/var/cache/dev/Container2oDCpG4/getDebug_FileLinkFormatter_UrlFormatService.php
namespace Container2oDCpG4;
=======
namespace ContainerVtARx3l;

>>>>>>> Stashed changes:FMPS_projetSymfony/var/cache/dev/ContainerVtARx3l/getDebug_FileLinkFormatter_UrlFormatService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_FileLinkFormatter_UrlFormatService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat(($container->services['router'] ?? $container->getRouterService()), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }
}