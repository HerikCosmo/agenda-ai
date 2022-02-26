<?php

namespace App\Controller;

class LoginAuthController implements HandleInterface
{
    public function handle(): void
    {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );

        $senha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_SANITIZE_URL
        );

        if($email === false){
            echo 'INVALID EMAIL';
            exit;
        }

        $user = UserController::getUser($email, $senha);
        
        if($user === false){
            $_SESSION['ERROR'] = 'Email e/ou senha inválido(s). Por favor, tente novamente.';
            header('location: /login');
            exit;
        }

        $_SESSION['LOGGED'] = 1;
        $_SESSION['USER'] = [
            'id' => $user->id,
            'name' => $user->nome
        ];

        header('location: /');
        exit;
    }
}