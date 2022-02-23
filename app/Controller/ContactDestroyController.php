<?php

namespace App\Controller;

use App\Model\Contact;

class ContactDestroyController implements HandleInterface
{
    public function handle(): void
    {
        $contact = new Contact();

        $contact->__set('id', filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));

        $contact->delete();

        header("location: /");
        exit;
    }
}