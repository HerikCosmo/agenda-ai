<?php

return [
    '/' => App\Controller\IndexController::class,

    '/login' => App\Controller\LoginIndexController::class,
    '/login-cadastrar' => App\Controller\LoginCreateController::class,
    '/login-form' => App\Controller\LoginAuthController::class,
    '/login-cadastro-usuario' => App\Controller\LoginSaveController::class,
    '/logout' => App\Controller\LoginLogoutController::class,
    
    '/contato-cadastro' => App\Controller\ContactCreateController::class,
    '/contato-cadastrar' => App\Controller\ContactSaveController::class,
    '/contato-edicao' => App\Controller\ContactEditController::class,
    '/contato-editar' => App\Controller\ContactUpdateController::class,
    

];