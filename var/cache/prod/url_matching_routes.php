<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_prueba_index', '_controller' => 'App\\Controller\\PruebaController::index'], null, null, null, false, false, null]],
        '/usuario' => [[['_route' => 'app_usuario', '_controller' => 'App\\Controller\\UsuarioController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/usuario/(\\d+)(*:21)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [
            [['_route' => 'app_usuario_show', '_controller' => 'App\\Controller\\UsuarioController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
