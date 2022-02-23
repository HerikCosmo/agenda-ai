<?php

namespace App\Controller;

use App\Model\User;

class LoginSaveController implements HandleInterface
{
    public function handle(): void
    {

        $nome = htmlspecialchars($_POST['nome']);

        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );

        $senha = htmlspecialchars($_POST['senha']);

        $user = new User();

        $user->__set('nome', $nome);
        $user->__set('email', $email);
        $user->__set('senha', $senha);

        $user->insert();

        $_SESSION['MESSAGE'] = "Usuário adicionado com sucesso";

        header('location: /login');
        exit;
    }
}