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

        $contact->__set('nome', $nome);
        $contact->__set('email', $email);
        $contact->__set('telefone', $telefone);
        $contact->__set('id_usuario', $_SESSION['USER']['id']);

        $contact->insert();

        $_SESSION['MESSAGE'] = "Contato adicionado com sucesso";

        header('location: /');
        exit;
    }
}