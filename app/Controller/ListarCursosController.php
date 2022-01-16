<?php

namespace App\Controller;

class ListarCursosController
{
    public function processRequest(){
        $pathView = __DIR__ . str_replace('/', DIRECTORY_SEPARATOR, '/../../view/agenda/listar-contatos.php');

        require_once $pathView;
    }
}