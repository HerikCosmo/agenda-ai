<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;
use App\Model\Contact;

class ContactEditController implements handleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {
        $contact = ContactController::searchById();

        if($contact === null){
            header("location: /");
            exit;
        }

        echo $this->renderView('/agenda/edit.php', [
            'contact' => $contact
        ]);
    }
}