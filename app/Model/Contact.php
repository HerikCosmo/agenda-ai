<?php

namespace App\Model;

use App\Database\Connection;

class Contact
{
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $id_usuario;
    private $connection;

    public function __construct()
    {
        $db = new Connection();

        $this->connection = $db->getConn();
    }

    public function getAllByUser()
    {
        try {
            $query = "SELECT * FROM contatos where id_usuario = :id_usuario";

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':id_usuario', $this->id_usuario);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function setIdUsuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }
}
