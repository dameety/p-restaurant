<?php

// Register Twill routes here (eg. Route::module('posts'))

Route::group(['prefix' => 'manager'], function () {
    Route::module('Menus');
    Route::module('Bookings');
});