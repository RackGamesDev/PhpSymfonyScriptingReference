<?php

namespace ContainerYrvfwvt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsuarioControllershowverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KegljIe.App\Controller\UsuarioController::showver()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KegljIe.App\\Controller\\UsuarioController::showver()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'usuario' => ['privates', '.errored..service_locator.KegljIe.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.KegljIe": it needs an instance of "App\\Entity\\Usuario" but this type has been excluded in "config/services.yaml".'],
        ], [
            'usuario' => 'App\\Entity\\Usuario',
        ]))->withContext('App\\Controller\\UsuarioController::showver()', $container);
    }
}
