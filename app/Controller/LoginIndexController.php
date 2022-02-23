<?php 

namespace App\Controller;

use App\Helper\RenderViewTrait;

class LoginIndexController implements HandleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {
        echo $this->renderView('login/index.php');
    }
}