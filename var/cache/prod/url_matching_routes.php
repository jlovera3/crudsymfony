<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/autor' => [[['_route' => 'autor_index', '_controller' => 'App\\Controller\\AutorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/autor/new' => [[['_route' => 'autor_new', '_controller' => 'App\\Controller\\AutorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/libro' => [[['_route' => 'libro_index', '_controller' => 'App\\Controller\\LibroController::index'], null, ['GET' => 0], null, true, false, null]],
        '/libro/new' => [[['_route' => 'libro_new', '_controller' => 'App\\Controller\\LibroController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/autor/([^/]++)(?'
                    .'|(*:25)'
                    .'|/edit(*:37)'
                    .'|(*:44)'
                .')'
                .'|/libro/([^/]++)(?'
                    .'|(*:70)'
                    .'|/edit(*:82)'
                    .'|(*:89)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'autor_show', '_controller' => 'App\\Controller\\AutorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        37 => [[['_route' => 'autor_edit', '_controller' => 'App\\Controller\\AutorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        44 => [[['_route' => 'autor_delete', '_controller' => 'App\\Controller\\AutorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        70 => [[['_route' => 'libro_show', '_controller' => 'App\\Controller\\LibroController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'libro_edit', '_controller' => 'App\\Controller\\LibroController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [
            [['_route' => 'libro_delete', '_controller' => 'App\\Controller\\LibroController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
