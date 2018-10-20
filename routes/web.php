<?php

use Illuminate\Routing\Router;
/** @var Router $router */


$router->group([
    'namespace' => 'Front',
    'as' => 'front.'
], function (Router $route) {

    $route->get('/', 'HomeController@index')->name('page.home');
    $route->get('/menu', 'PagesController@menu')->name('page.menu');
    $route->get('/about', 'PagesController@about')->name('page.about');
    $route->get('/contact', 'PagesController@contact')->name('page.contact');
    $route->get('/reservation', 'PagesController@reservation')->name('page.reservation');

});
