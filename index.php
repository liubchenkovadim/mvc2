<?php

use application\core\Router;
require 'application/config/define.php';


spl_autoload_register(function ($class){
    $path = str_replace('\\', '/', $class.'.php');
    if(file_exists($path)){
        require $path;
    }
});
require 'application/lib/Dev.php';
session_start();
$router = new Router;
$router->run();
