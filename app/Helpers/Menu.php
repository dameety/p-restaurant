<?php

class Menu
{
    public static function isActiveRoute($route, $output = 'active_menu')
    {
        if (Route::currentRouteName() == $route ) {
            return $output;
        }
    }

    public static function areActiveRoutes(array $routes, $output = 'active_menu')
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) {
                return $output;
            }
        }
    }
}