<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;
use App\Model\Contact;

class IndexController implements HandleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {
        $contact = new Contact();

        $id_usuario = $_SESSION['USER']['id'];

        $contact->setIdUsuario($id_usuario);

        echo $this->renderView('/agenda/index.php', [
            'contatos' =>  $contact->selectAllByUser()
        ]);
    }
}