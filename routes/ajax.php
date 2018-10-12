<?php

use Illuminate\Routing\Router;
/** @var Router $router */


$router->group([

        'middleware' => ['auth'],

    ], function (Router $route) {

});
