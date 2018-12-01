<?php

// Register Twill routes here (eg. Route::module('posts'))

Route::group([], function () {
    Route::module('menus');
    Route::module('bookings');
    Route::module('chefs');
    Route::module('cars');
});