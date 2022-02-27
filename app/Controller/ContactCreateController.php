<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;

class ContactCreateController implements HandleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {

        echo $this->renderView('/agenda/create.php');
    }
}