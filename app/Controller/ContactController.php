<?php

namespace App\Controller;

use App\Model\Contact;

class ContactController
{
    public static function getAllContacts(){
        $contact = new Contact();

        $id_usuario = $_SESSION['USER']['id'];

        $contact->setIdUsuario($id_usuario);

        return $contact->selectAllByUser();
    }

    public static function searchById(){
        $contact = new Contact();

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $contact->__set('id', $id);

        return $contact->selectById();
    }
}