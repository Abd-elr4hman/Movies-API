<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/movies' => [
            [['_route' => 'all_movies', '_controller' => 'App\\Controller\\MoviesController::allMovies'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_one_movie', '_controller' => 'App\\Controller\\MoviesController::createOneMovie'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/v1/movies/([^/]++)(?'
                    .'|(*:33)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [
            [['_route' => 'get_one_movie', '_controller' => 'App\\Controller\\MoviesController::getOneMovie'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'delete_one_movie', '_controller' => 'App\\Controller\\MoviesController::deleteOneMovie'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'update_one_movie', '_controller' => 'App\\Controller\\MoviesController::updateOneMovie'], ['id'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
