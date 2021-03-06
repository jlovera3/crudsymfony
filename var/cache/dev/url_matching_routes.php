<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/autor' => [[['_route' => 'autor_index', '_controller' => 'App\\Controller\\AutorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/autor/new' => [[['_route' => 'autor_new', '_controller' => 'App\\Controller\\AutorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/libro' => [[['_route' => 'libro_index', '_controller' => 'App\\Controller\\LibroController::index'], null, ['GET' => 0], null, true, false, null]],
        '/libro/new' => [[['_route' => 'libro_new', '_controller' => 'App\\Controller\\LibroController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_menu_mainmenu', '_controller' => 'App\\Controller\\MenuController::mainMenu'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\MenuController::mainMenu'], null, null, null, false, false, null],
        ],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/autor/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/libro/([^/]++)(?'
                    .'|(*:235)'
                    .'|/edit(*:248)'
                    .'|(*:256)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'autor_show', '_controller' => 'App\\Controller\\AutorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'autor_edit', '_controller' => 'App\\Controller\\AutorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'autor_delete', '_controller' => 'App\\Controller\\AutorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        235 => [[['_route' => 'libro_show', '_controller' => 'App\\Controller\\LibroController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'libro_edit', '_controller' => 'App\\Controller\\LibroController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [
            [['_route' => 'libro_delete', '_controller' => 'App\\Controller\\LibroController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
