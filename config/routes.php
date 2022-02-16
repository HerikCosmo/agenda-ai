<?php

return [
    '/' => App\Controller\ListarContatosController::class,
    '/login' => App\Controller\PaginaLogin::class,
    '/login-form' => App\Controller\LoginForm::class,
    '/login-cadastrar' => App\Controller\CadastrarUsuario::class,
    '/logout' => App\Controller\Logout::class,
    '/login-cadastro-usuario' => App\Controller\CadastroUsuario::class
];