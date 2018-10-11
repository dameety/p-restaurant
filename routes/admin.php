<?php

// Register Twill routes here (eg. Route::module('posts'))

Route::group(['prefix' => 'work'], function () {
    Route::module('projects');
    Route::module('clients');
    Route::module('industries');
    Route::module('studios');
});