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

        $contact->__set('nome', $nome);
        $contact->__set('email', $email);
        $contact->__set('telefone', $telefone);
        $contact->__set('id', $id);

        $contact->update();

        $_SESSION['MESSAGE'] = "Contato atualizado com sucesso";

        
        header('location: /');
        exit;
    }
}