<?php

namespace App\Model;

use App\Database\Connection;

class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $login;
    private $senha;
    private $connection;

    public function __construct()
    {
        $db = new Connection();

        $this->connection = $db->getConn();
    }

    public function getUser()
    {
        try { 
            $query = "SELECT * FROM usuarios where `login` = :login and `senha` = :senha";

            $stmt = new $this->connection->prepare($query);

            $stmt->bindValue(':login', $this->login);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_OBJ);
        } catch (\PDOException $e){
            echo $e->getMessage();
            exit;
        }
    }

}