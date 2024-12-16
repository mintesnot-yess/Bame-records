<?php

 
const BASE_PASE = __DIR__ . '/../';

include BASE_PASE . "app/Core/Helpers.php";

spl_autoload_register(function ($class) {

    include base_path(path: 'app/Core/' . $class . '.php');
});

include base_path("app/Core/Router.php");
