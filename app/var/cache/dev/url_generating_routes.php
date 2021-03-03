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
    'api.users_show' => [[], ['_controller' => 'App\\Controller\\ApiController::getAllUsers'], [], [['text', '/api/user/list']], [], []],
    'api.user_show_id' => [['userId'], ['_controller' => 'App\\Controller\\ApiController::getOneUser'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/api/user']], [], []],
    'api.users_details_show' => [[], ['_controller' => 'App\\Controller\\ApiController::getAllUsersDetails'], [], [['text', '/api/user_detail/list']], [], []],
    'api.user_details_show_id' => [['userId'], ['_controller' => 'App\\Controller\\ApiController::getOneUserDetail'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/api/user_detail']], [], []],
    'api.user_create' => [[], ['_controller' => 'App\\Controller\\ApiController::createUser'], [], [['text', '/api/user/create']], [], []],
    'api.user_update' => [[], ['_controller' => 'App\\Controller\\ApiController::updateUserPassword'], [], [['text', '/api/user/update']], [], []],
    'api.user_delete' => [['username'], ['_controller' => 'App\\Controller\\ApiController::deleteUser'], [], [['variable', '/', '[^/]++', 'username', true], ['text', '/api/user/delete']], [], []],
    'api.action_deposit' => [['userId'], ['_controller' => 'App\\Controller\\ApiController::deposit'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/api/deposit']], [], []],
    'api.action_withdrawal' => [['userId'], ['_controller' => 'App\\Controller\\ApiController::withdrawal'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/api/withdrawal']], [], []],
    'deposit' => [[], ['_controller' => 'App\\Controller\\DepositController::index'], [], [['text', '/deposit']], [], []],
    'detail' => [[], ['_controller' => 'App\\Controller\\DetailController::index'], [], [['text', '/detail']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'withdrawal' => [[], ['_controller' => 'App\\Controller\\WithdrawalController::index'], [], [['text', '/withdrawal']], [], []],
];