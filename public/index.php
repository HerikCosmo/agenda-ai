<?php

require_once __DIR__ . '/../autoload.php';

$routes = require __DIR__ . '/../config/routes.php';

$path = $_SERVER['PATH_INFO'] ?? $_SERVER['REQUEST_URI'];

$controllerClass = $routes[$path];

$controller = new $controllerClass();
$controller->handle();
