<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;

class ContactCreateController implements handleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {

        echo $this->renderView('/agenda/create.php');
    }
}