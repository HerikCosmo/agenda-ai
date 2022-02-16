<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;

class CadastrarUsuario implements HandleInterface
{
    use RenderViewTrait;    

    public function handle(): void
    {
        echo $this->renderView('/login/cadastrar.php');
    }
}
