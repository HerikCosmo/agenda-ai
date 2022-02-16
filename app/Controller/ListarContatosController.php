<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;

class ListarContatosController implements handleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {

        echo $this->renderView('/agenda/listar-contatos.php', [
            'contatos' =>  ContactController::getAllContacts()
        ]);
    }
}