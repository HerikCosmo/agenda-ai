<?php

namespace App\Controller;

use App\Model\Contact;

class ContactSaveController implements HandleInterface
{
    public function handle(): void
    {

        $nome = htmlspecialchars($_POST['name']);

        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );

        $telefone = htmlspecialchars($_POST['phone']);

        $contact = new Contact();

        $contact->__set('email', $email);
        $contact->__set('id_usuario', $_SESSION['USER']['id']);

        if(!empty($contact->selectByEmail())){
            $_SESSION['ALERT'] = ['message' => "Já existe um contato com o email informado. Por favor, informe outro email.", 'bg' => 'danger'];
            header('location: /contato-cadastro');
            exit;
        }

        $contact->__set('nome', $nome);
        $contact->__set('telefone', $telefone);

        $contact->insert();

        $_SESSION['MESSAGE'] = "Contato adicionado com sucesso";

        header('location: /');
        exit;
    }
}