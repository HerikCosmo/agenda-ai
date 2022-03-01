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

        if(!empty($user->selectEmail())){
            $_SESSION['ALERT'] = ['message' => "Já existe um usuário com o email informado. Por favor, faça login.", 'bg' => 'danger'];
            header('location: /login');
            exit;
        }
        

        $user->insert();

        $_SESSION['ALERT'] = ['message' => "Usuário adicionado com sucesso.", 'bg' => 'success'];

        header('location: /login');
        exit;
    }
}