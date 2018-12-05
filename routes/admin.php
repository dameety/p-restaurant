<?php

// Register Twill routes here (eg. Route::module('posts'))

Route::group([], function () {
    Route::module('menus');
    Route::module('reservations');
    Route::module('chefs');
    Route::module('enquiries');
});