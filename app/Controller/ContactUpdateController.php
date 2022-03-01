<?php 

namespace App\Controller;

use App\Model\Contact;

class ContactUpdateController implements HandleInterface
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

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $contact = new Contact();

        $contact->__set('email', $email);
        $contact->__set('id_usuario', $_SESSION['USER']['id']);
        $contact->__set('id', $id);

        if(!empty($contact->selectByEmailAndId())){
            $_SESSION['ALERT'] = ['message' => "Já existe um contato com o email informado. Por favor, informe outro email.", 'bg' => 'danger'];
            header("location: /contato-edicao?id=$id");
            exit;
        }

        $contact->__set('nome', $nome);
        $contact->__set('telefone', $telefone);

        $contact->update();

        $_SESSION['MESSAGE'] = "Contato atualizado com sucesso";

        
        header('location: /');
        exit;
    }
}