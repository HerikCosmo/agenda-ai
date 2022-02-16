<?php

require_once __DIR__ . '/../autoload.php';

$routes = require __DIR__ . '/../config/routes.php';

$path = $_SERVER['PATH_INFO'] ?? $_SERVER['REQUEST_URI'];

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
