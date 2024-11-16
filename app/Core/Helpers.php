<?php

function base_path($path)
{
    return BASE_PASE . $path;
}

function assets($path)
{
    return base_path("assets/" . $path);
}

function views($path, $attiributes = [])
{
    extract($attiributes);
    return base_path(path: 'app/views/' . $path);
}

function routeTocontroller($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        include base_path($routes[$url]);
    } else {
        include views(path: '404.php');

    }
}
