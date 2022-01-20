<?php 

namespace App\Controller;

use App\Helper\RenderViewTrait;

class PaginaLogin implements HandleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {
        echo $this->renderView('login/pagina-login.php');
    }
}