<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;

class LoginCreateController implements HandleInterface
{
    use RenderViewTrait;    

    public function handle(): void
    {
        echo $this->renderView('/login/create.php');
    }
}
