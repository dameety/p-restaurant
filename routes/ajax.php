<?php

use Illuminate\Routing\Router;
/** @var Router $router */


$router->group([
    
        'namespace' => 'Ajax',
        'as' => 'ajax.'

    ], function (Router $route) {

    $route->post('enquiries/', 'EnquiriesController@store');
    $route->post('reservations/', 'ReservationsController@store');
});
