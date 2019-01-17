<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
function debug($str){
    echo '<pre>';
    var_dump($str);
    echo '</pre>;';
    exit;
}

