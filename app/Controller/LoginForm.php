<?php

namespace App\Controller;

class LoginForm implements HandleInterface
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
            echo 'Usuário não encontrado';
            exit;
        }

        echo 'logado';
        
    }
}