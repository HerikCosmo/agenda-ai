<?php

namespace App\Controller;

use App\Model\User;

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

        $user = new User();
        $user->email = $email;
        $user->senha = $senha;

        $user = $user->selectByEmailAndPassword();
        
        if($user === false){
            $_SESSION['ALERT'] = ['message' => "Email e/ou senha inválido(s). Por favor, tente novamente.", 'bg' => 'danger'];
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