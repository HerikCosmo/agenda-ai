<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;
use App\Model\Contact;

class ContactEditController implements HandleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {
        $contact = new Contact();

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $contact->__set('id', $id);
        $contact->__set('id_usuario', $_SESSION['USER']['id']);

        $contact = $contact->selectById();

        if(empty($contact)){
            header("location: /");
            exit; 
        }

        echo $this->renderView('/agenda/edit.php', [
            'contact' => $contact
        ]);
    }
}