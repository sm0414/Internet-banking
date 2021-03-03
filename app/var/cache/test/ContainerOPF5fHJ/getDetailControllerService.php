<?php

namespace ContainerOPF5fHJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDetailControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\DetailController' shared autowired service.
     *
     * @return \App\Controller\DetailController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DetailController.php';

        $container->services['App\\Controller\\DetailController'] = $instance = new \App\Controller\DetailController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\DetailController', $container));

        return $instance;
    }
}
