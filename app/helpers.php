<?php

if (!function_exists('page_title')) {
    function page_title($title)
    {
        $base_title = config('app.name');
        return empty($title) ? $base_title : sprintf('%s | %s', $base_title, $title);
    }
}

if (!function_exists('set_active_route')) {
    function set_active_route($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}
