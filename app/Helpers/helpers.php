<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('isActive')) {
    /**
     * @param string $route_name
     * @param string|null $class
     * @param string
     */
    function isActive($route_name, ?string $class = 'active'): string
    {
        return strpos(Route::currentRouteName(), $route_name) != false ? $class : '';
    }
}
