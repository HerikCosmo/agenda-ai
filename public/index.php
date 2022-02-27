<?php

require(__DIR__ . '/../vendor/autoload.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$routes = require __DIR__ . '/../config/routes.php';

$path = $_SERVER['PATH_INFO'] ?? $_SERVER['REDIRECT_URL'] ?? $_SERVER['REQUEST_URI'];

if(!array_key_exists($path, $routes)){
    http_response_code(404);
    exit();
}

session_start();

$isLoginRoute = stripos($path, 'login');

if(!isset($_SESSION['LOGGED']) && $isLoginRoute === false){
    header('Location: /login');
    exit;
}

$controllerClass = $routes[$path];
$controller = new $controllerClass();
$controller->handle();
