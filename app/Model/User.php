<?php

namespace App\Model;

use App\Database\Connection;

class User
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

    public function __set($attr, $value){
        $this->$attr = $value;
    }

    public function selectByEmailAndPassword()
    {
        try { 
            $query = "SELECT * FROM usuarios where `email` = :email and `senha` = :senha";

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_OBJ);
        } catch (\PDOException $e){
            echo $e->getMessage();
            exit;
        }
    }

}