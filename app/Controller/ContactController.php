<?php

namespace App\Controller;

use App\Model\Contact;

class ContactController
{
    public static function getAllContacts(){
        $contact = new Contact();

        $id_usuario = $_SESSION['USER']['id'];

        $contact->setIdUsuario($id_usuario);

        return $contact->getAllByUser();
    }
}