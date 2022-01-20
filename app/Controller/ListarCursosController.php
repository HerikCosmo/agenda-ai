<?php

namespace App\Controller;

use App\Helper\RenderViewTrait;

class ListarCursosController implements handleInterface
{
    use RenderViewTrait;

    public function handle(): void
    {
        echo $this->renderView('/agenda/listar-contatos.php');
    }
}