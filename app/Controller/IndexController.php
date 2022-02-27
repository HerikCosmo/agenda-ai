<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;

class IndexController implements HandleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {

        echo $this->renderView('/agenda/index.php', [
            'contatos' =>  ContactController::getAllContacts()
        ]);
    }
}