<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = include base_path(path: "routes/web.php");

routeToController($url, $routes);
