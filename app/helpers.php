<?php 

if(! function_exists('page_title')){
    function page_title($title){
        $base_tile = "Laracarte - List of artisans";
        return empty($title) ? $base_tile : sprintf('%s | %s', $title, $base_title);
       
    }
}

if(! function_exists('set_active_route')){
    function set_active_route($route){
       return Route::is($route) ? 'active': '';
    }
}