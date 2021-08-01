<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::indexAdmin'], null, null, null, false, false, null],
            [['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null],
        ],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/admin/users/dodaj' => [[['_route' => 'admin_users_dodaj', '_controller' => 'App\\Controller\\AdminController::dodajUsersAdmin'], null, null, null, false, false, null]],
        '/admin/dokumenty' => [[['_route' => 'admin_dokumenty', '_controller' => 'App\\Controller\\AdminController::dokumenty'], null, null, null, false, false, null]],
        '/admin/dokumenty/dodaj' => [[['_route' => 'admin_dokumenty_dodaj', '_controller' => 'App\\Controller\\AdminController::dodajDokumentyAdmin'], null, null, null, false, false, null]],
        '/admin/message' => [[['_route' => 'admin_message', '_controller' => 'App\\Controller\\AdminController::message'], null, null, null, false, false, null]],
        '/agro/kontakt' => [[['_route' => 'agro_kontakt', '_controller' => 'App\\Controller\\AgroController::kontaktAgro'], null, null, null, false, false, null]],
        '/agro/info' => [[['_route' => 'agro_system', '_controller' => 'App\\Controller\\AgroController::systemAgro'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'dokumenty_index', '_controller' => 'App\\Controller\\DokumentyController::indexDokumenty'], null, null, null, false, false, null]],
        '/dokumenty/dodaj' => [[['_route' => 'dokumenty_dodaj', '_controller' => 'App\\Controller\\DokumentyController::dodajDokumenty'], null, null, null, false, false, null]],
        '/dokumenty/test' => [[['_route' => 'dokumenty_test', '_controller' => 'App\\Controller\\DokumentyController::testDokumenty'], null, null, null, false, false, null]],
        '/dokumenty/dane' => [[['_route' => 'dokumenty_dane', '_controller' => 'App\\Controller\\DokumentyController::daneDokumenty'], null, null, null, false, false, null]],
        '/dokumenty/zestawienie/zbiorcze' => [[['_route' => 'dokumenty_zbiorcze', '_controller' => 'App\\Controller\\DokumentyController::zbiorczeDokumenty'], null, ['GET' => 0], null, false, false, null]],
        '/dokumenty/user' => [[['_route' => 'dokumenty_user', '_controller' => 'App\\Controller\\DokumentyController::infoUserDokumenty'], null, null, null, true, false, null]],
        '/dokumenty/user/edit' => [[['_route' => 'dokumenty_useredit', '_controller' => 'App\\Controller\\DokumentyController::edytujUserDokumenty'], null, null, null, true, false, null]],
        '/dokumenty/szukaj' => [[['_route' => 'dokumenty_szukaj', '_controller' => 'App\\Controller\\DokumentyController::szukajDokumenty'], null, null, null, false, false, null]],
        '/message' => [[['_route' => 'message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/message/new' => [[['_route' => 'message_new', '_controller' => 'App\\Controller\\MessageController::new'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'payment_index', '_controller' => 'App\\Controller\\PaymentController::indexPayment'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::registerAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/users/(?'
                    .'|([^/]++)(*:31)'
                    .'|edit/([^/]++)(*:51)'
                .')'
                .'|/dokument(?'
                    .'|y/(?'
                        .'|info/([^/]++)(*:89)'
                        .'|usun/([^/]++)(*:109)'
                        .'|d(?'
                            .'|elete/([^/]++)(*:135)'
                            .'|ane/miesiac/([^/]++)(*:163)'
                        .')'
                        .'|test2/([^/]++)(*:186)'
                        .'|zestawienie/zbiorcze_miesiac/([^/]++)(*:231)'
                    .')'
                    .'|/edytuj/([^/]++)(*:256)'
                .')'
                .'|/message/([^/]++)(?'
                    .'|(*:285)'
                    .'|/edit(*:298)'
                    .'|(*:306)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'admin_users_info', '_controller' => 'App\\Controller\\AdminController::infoUserAdmin'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\AdminController::editUserAdmin'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'dokumenty_details', '_controller' => 'App\\Controller\\DokumentyController::detailsDokumenty'], ['id'], null, null, false, true, null]],
        109 => [[['_route' => 'dokumenty_usun', '_controller' => 'App\\Controller\\DokumentyController::usunDokument'], ['id'], ['POST' => 0], null, false, true, null]],
        135 => [[['_route' => 'dokumenty_delete', '_controller' => 'App\\Controller\\DokumentyController::deleteDokument'], ['id'], ['DELETE' => 0], null, false, true, null]],
        163 => [[['_route' => 'dokumenty_danemiesiac', '_controller' => 'App\\Controller\\DokumentyController::detailsMiesiecznyDokumenty'], ['data'], null, null, false, true, null]],
        186 => [[['_route' => 'dokumenty_test_2', '_controller' => 'App\\Controller\\DokumentyController::testDokumentyId'], ['data'], null, null, false, true, null]],
        231 => [[['_route' => 'dokumenty_zbiorcze_miesiac', '_controller' => 'App\\Controller\\DokumentyController::zbiorczeMiesiacDokumenty'], ['data'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'dokumenty_edytuj', '_controller' => 'App\\Controller\\DokumentyController::edytujDokumenty'], ['id'], null, null, false, true, null]],
        285 => [[['_route' => 'message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        306 => [
            [['_route' => 'message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
