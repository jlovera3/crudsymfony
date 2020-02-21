<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'autor_index' => [[], ['_controller' => 'App\\Controller\\AutorController::index'], [], [['text', '/autor/']], [], []],
    'autor_new' => [[], ['_controller' => 'App\\Controller\\AutorController::new'], [], [['text', '/autor/new']], [], []],
    'autor_show' => [['id'], ['_controller' => 'App\\Controller\\AutorController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/autor']], [], []],
    'autor_edit' => [['id'], ['_controller' => 'App\\Controller\\AutorController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/autor']], [], []],
    'autor_delete' => [['id'], ['_controller' => 'App\\Controller\\AutorController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/autor']], [], []],
    'libro_index' => [[], ['_controller' => 'App\\Controller\\LibroController::index'], [], [['text', '/libro/']], [], []],
    'libro_new' => [[], ['_controller' => 'App\\Controller\\LibroController::new'], [], [['text', '/libro/new']], [], []],
    'libro_show' => [['id'], ['_controller' => 'App\\Controller\\LibroController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/libro']], [], []],
    'libro_edit' => [['id'], ['_controller' => 'App\\Controller\\LibroController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/libro']], [], []],
    'libro_delete' => [['id'], ['_controller' => 'App\\Controller\\LibroController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/libro']], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/main']], [], []],
];