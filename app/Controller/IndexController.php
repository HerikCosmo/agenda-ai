<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;

class IndexController implements handleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {

        echo $this->renderView('/agenda/index.php', [
            'contatos' =>  ContactController::getAllContacts()
        ]);
    }
}