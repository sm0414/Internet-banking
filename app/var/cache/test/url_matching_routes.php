<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api' => [[['_route' => 'api.index', '_controller' => 'App\\Controller\\ApiController::index'], null, ['GET' => 0], null, true, false, null]],
        '/api/users/show' => [[['_route' => 'api.users_show', '_controller' => 'App\\Controller\\ApiController::getAllUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/details/show' => [[['_route' => 'api.users_details_show', '_controller' => 'App\\Controller\\ApiController::getAllUsersDetails'], null, ['GET' => 0], null, false, false, null]],
        '/deposit' => [[['_route' => 'deposit', '_controller' => 'App\\Controller\\DepositController::index'], null, null, null, false, false, null]],
        '/detail' => [[['_route' => 'detail', '_controller' => 'App\\Controller\\DetailController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/withdrawal' => [[['_route' => 'withdrawal', '_controller' => 'App\\Controller\\WithdrawalController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|user(?'
                        .'|/(?'
                            .'|show/([^/]++)(*:39)'
                            .'|create/([^/]++)/([^/]++)(*:70)'
                            .'|update/([^/]++)/([^/]++)(*:101)'
                            .'|delete/([^/]++)(*:124)'
                        .')'
                        .'|_details/show/([^/]++)(*:155)'
                    .')'
                    .'|action/(?'
                        .'|deposit/([^/]++)(*:190)'
                        .'|withdrawal/([^/]++)(*:217)'
                        .'|update/([^/]++)(?:/([^/]++))?(*:254)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'api.user_show_id', '_controller' => 'App\\Controller\\ApiController::getOneUser'], ['userId'], ['GET' => 0], null, false, true, null]],
        70 => [[['_route' => 'api.user_create', '_controller' => 'App\\Controller\\ApiController::createUser'], ['username', 'password'], ['POST' => 0], null, false, true, null]],
        101 => [[['_route' => 'api.user_update', '_controller' => 'App\\Controller\\ApiController::updateUserPassword'], ['username', 'password'], ['PUT' => 0], null, false, true, null]],
        124 => [[['_route' => 'api.user_delete', '_controller' => 'App\\Controller\\ApiController::deleteUser'], ['username'], ['DELETE' => 0], null, false, true, null]],
        155 => [[['_route' => 'api.user_details_show_id', '_controller' => 'App\\Controller\\ApiController::getOneUserDetail'], ['userId'], ['GET' => 0], null, false, true, null]],
        190 => [[['_route' => 'api.action_deposit', '_controller' => 'App\\Controller\\ApiController::newDeposit'], ['userId'], ['PUT' => 0, 'GET' => 1], null, false, true, null]],
        217 => [[['_route' => 'api.action_withdrawal', '_controller' => 'App\\Controller\\ApiController::newWithdrawal'], ['userId'], ['PUT' => 0], null, false, true, null]],
        254 => [
            [['_route' => 'api.action_update', 'remark' => null, '_controller' => 'App\\Controller\\ApiController::updateDetail'], ['detailId', 'remark'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
