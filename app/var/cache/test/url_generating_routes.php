<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api.index' => [[], ['_controller' => 'App\\Controller\\ApiController::index'], [], [['text', '/api/']], [], []],
    'api.users_show' => [[], ['_controller' => 'App\\Controller\\ApiController::getAllUsers'], [], [['text', '/api/users/show']], [], []],
    'api.user_show_id' => [['userId'], ['_controller' => 'App\\Controller\\ApiController::getOneUser'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/api/user/show']], [], []],
    'api.users_details_show' => [[], ['_controller' => 'App\\Controller\\ApiController::getAllUsersDetails'], [], [['text', '/api/details/show']], [], []],
    'api.user_details_show_id' => [['userId'], ['_controller' => 'App\\Controller\\ApiController::getOneUserDetail'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/api/user_details/show']], [], []],
    'api.user_create' => [['username', 'password'], ['_controller' => 'App\\Controller\\ApiController::createUser'], [], [['variable', '/', '[^/]++', 'password', true], ['variable', '/', '[^/]++', 'username', true], ['text', '/api/user/create']], [], []],
    'api.user_update' => [['username', 'password'], ['_controller' => 'App\\Controller\\ApiController::updateUserPassword'], [], [['variable', '/', '[^/]++', 'password', true], ['variable', '/', '[^/]++', 'username', true], ['text', '/api/user/update']], [], []],
    'api.user_delete' => [['username'], ['_controller' => 'App\\Controller\\ApiController::deleteUser'], [], [['variable', '/', '[^/]++', 'username', true], ['text', '/api/user/delete']], [], []],
    'api.action_deposit' => [['userId'], ['_controller' => 'App\\Controller\\ApiController::newDeposit'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/api/action/deposit']], [], []],
    'api.action_withdrawal' => [['userId'], ['_controller' => 'App\\Controller\\ApiController::newWithdrawal'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/api/action/withdrawal']], [], []],
    'api.action_update' => [['detailId', 'remark'], ['remark' => null, '_controller' => 'App\\Controller\\ApiController::updateDetail'], [], [['variable', '/', '[^/]++', 'remark', true], ['variable', '/', '[^/]++', 'detailId', true], ['text', '/api/action/update']], [], []],
    'deposit' => [[], ['_controller' => 'App\\Controller\\DepositController::index'], [], [['text', '/deposit']], [], []],
    'detail' => [[], ['_controller' => 'App\\Controller\\DetailController::index'], [], [['text', '/detail']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'withdrawal' => [[], ['_controller' => 'App\\Controller\\WithdrawalController::index'], [], [['text', '/withdrawal']], [], []],
];
