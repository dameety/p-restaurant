<?php

use Illuminate\Routing\Router;
/** @var Router $router */


$router->group([
    
        'namespace' => 'Ajax',
        'as' => 'ajax.',
        'prefix' => 'ajax'

    ], function (Router $route) {

    $route->post('enquiries/store', 'EnquiriesController@store');
    $route->post('reservations/store', 'ReservationsController@store');
});
