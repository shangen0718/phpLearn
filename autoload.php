<?php
define('BASE_PATH', realpath(dirname(__FILE__)));
function autoloader($class) {
    $filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php';
    // echo $filename;
    require $filename;
}

spl_autoload_register('autoloader');