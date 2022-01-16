<?php

spl_autoload_register(function (string $className) {
    $pathFile = str_replace('App', 'app', $className);
    $pathFile = str_replace('\\', DIRECTORY_SEPARATOR, $pathFile);
    $pathFile = __DIR__ . DIRECTORY_SEPARATOR . $pathFile;
    $pathFile .= ".php";
        
    if(file_exists($pathFile)){
        require_once $pathFile;
    }
});