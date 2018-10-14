<?php

use Illuminate\Routing\Router;
/** @var Router $router */


$router->group([
    'namespace' => 'Front',
    'as' => 'front.'
], function (Router $route) {

    $route->get('/', 'HomeController@index')->name('front.index');

});




/******************************************************
* ALL AJAX ROUTES ARE HERE
* ****************************************************
*/
Route::name('ajax.')
	->prefix('ajax')
	->namespace('Ajax')
	->group(base_path('routes/ajax.php'));


