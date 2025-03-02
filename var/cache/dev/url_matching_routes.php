<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/csv/read' => [[['_route' => 'read_csv', '_controller' => 'App\\Controller\\LeerCsvController::readCsv'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_prueba_index', '_controller' => 'App\\Controller\\PruebaController::index'], null, null, null, false, false, null]],
        '/session/clear' => [[['_route' => 'clear_session', '_controller' => 'App\\Controller\\SessionController::clearSession'], null, null, null, false, false, null]],
        '/usuario' => [[['_route' => 'app_usuario', '_controller' => 'App\\Controller\\UsuarioController::index'], null, null, null, false, false, null]],
        '/usuario/nuevo' => [[['_route' => 'app_usuario_new', '_controller' => 'App\\Controller\\UsuarioController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/session/(?'
                    .'|set/([^/]++)/([^/]++)(*:235)'
                    .'|get/([^/]++)(*:255)'
                    .'|remove/([^/]++)(*:278)'
                .')'
                .'|/usuario(?'
                    .'|/(?'
                        .'|(\\d+)(*:307)'
                        .'|editar/(\\d+)(*:327)'
                        .'|borrar/(\\d+)(*:347)'
                    .')'
                    .'|ver/(\\d+)(*:365)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        235 => [[['_route' => 'set_session', '_controller' => 'App\\Controller\\SessionController::setSession'], ['key', 'value'], null, null, false, true, null]],
        255 => [[['_route' => 'get_session', '_controller' => 'App\\Controller\\SessionController::getSession'], ['key'], null, null, false, true, null]],
        278 => [[['_route' => 'remove_session', '_controller' => 'App\\Controller\\SessionController::removeSession'], ['key'], null, null, false, true, null]],
        307 => [[['_route' => 'app_usuario_show', '_controller' => 'App\\Controller\\UsuarioController::show'], ['id'], null, null, false, true, null]],
        327 => [[['_route' => 'app_usuario_edit', '_controller' => 'App\\Controller\\UsuarioController::edit'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'app_usuario_delete', '_controller' => 'App\\Controller\\UsuarioController::delete'], ['id'], null, null, false, true, null]],
        365 => [
            [['_route' => 'app_usuario_show_ver', '_controller' => 'App\\Controller\\UsuarioController::showver'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
