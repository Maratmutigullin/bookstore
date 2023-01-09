<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/book/categories' => [[['_route' => 'app_bookcategory_categories', '_controller' => 'App\\Controller\\BookCategoryController::categories'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/subscribe' => [[['_route' => 'app_subscribe_action', '_controller' => 'App\\Controller\\SubscribeController::action'], null, ['POST' => 0], null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/v1/category/([^/]++)/books(*:38)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:73)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_book_booksbycategory', '_controller' => 'App\\Controller\\BookController::booksByCategory'], ['id'], ['GET' => 0], null, false, false, null]],
        73 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
