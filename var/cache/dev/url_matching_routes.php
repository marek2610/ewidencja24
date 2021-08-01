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
                .'|/admin/users/(?'
                    .'|([^/]++)(*:193)'
                    .'|edit/([^/]++)(*:214)'
                .')'
                .'|/dokument(?'
                    .'|y/(?'
                        .'|info/([^/]++)(*:253)'
                        .'|usun/([^/]++)(*:274)'
                        .'|d(?'
                            .'|elete/([^/]++)(*:300)'
                            .'|ane/miesiac/([^/]++)(*:328)'
                        .')'
                        .'|test2/([^/]++)(*:351)'
                        .'|zestawienie/zbiorcze_miesiac/([^/]++)(*:396)'
                    .')'
                    .'|/edytuj/([^/]++)(*:421)'
                .')'
                .'|/message/([^/]++)(?'
                    .'|(*:450)'
                    .'|/edit(*:463)'
                    .'|(*:471)'
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
        193 => [[['_route' => 'admin_users_info', '_controller' => 'App\\Controller\\AdminController::infoUserAdmin'], ['id'], null, null, false, true, null]],
        214 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\AdminController::editUserAdmin'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'dokumenty_details', '_controller' => 'App\\Controller\\DokumentyController::detailsDokumenty'], ['id'], null, null, false, true, null]],
        274 => [[['_route' => 'dokumenty_usun', '_controller' => 'App\\Controller\\DokumentyController::usunDokument'], ['id'], ['POST' => 0], null, false, true, null]],
        300 => [[['_route' => 'dokumenty_delete', '_controller' => 'App\\Controller\\DokumentyController::deleteDokument'], ['id'], ['DELETE' => 0], null, false, true, null]],
        328 => [[['_route' => 'dokumenty_danemiesiac', '_controller' => 'App\\Controller\\DokumentyController::detailsMiesiecznyDokumenty'], ['data'], null, null, false, true, null]],
        351 => [[['_route' => 'dokumenty_test_2', '_controller' => 'App\\Controller\\DokumentyController::testDokumentyId'], ['data'], null, null, false, true, null]],
        396 => [[['_route' => 'dokumenty_zbiorcze_miesiac', '_controller' => 'App\\Controller\\DokumentyController::zbiorczeMiesiacDokumenty'], ['data'], ['GET' => 0], null, false, true, null]],
        421 => [[['_route' => 'dokumenty_edytuj', '_controller' => 'App\\Controller\\DokumentyController::edytujDokumenty'], ['id'], null, null, false, true, null]],
        450 => [[['_route' => 'message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        463 => [[['_route' => 'message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        471 => [
            [['_route' => 'message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
