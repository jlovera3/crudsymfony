<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
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
