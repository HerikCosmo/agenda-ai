<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;
use App\Model\Contact;

class ContactEditController implements HandleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {
        $contact = ContactController::searchById();

        if(empty($contact)){
            header("location: /");
            exit; 
        }

        echo $this->renderView('/agenda/edit.php', [
            'contact' => $contact
        ]);
    }
}