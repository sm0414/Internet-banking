<?php

namespace Container1ZZQ3oX;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWithdrawalControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\WithdrawalController' shared autowired service.
     *
     * @return \App\Controller\WithdrawalController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/WithdrawalController.php';

        $container->services['App\\Controller\\WithdrawalController'] = $instance = new \App\Controller\WithdrawalController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\WithdrawalController', $container));

        return $instance;
    }
}