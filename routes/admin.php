<?php

// Register Twill routes here (eg. Route::module('posts'))

Route::group(['prefix' => 'admin'], function () {
    Route::module('Menus');
    Route::module('Bookings');
});