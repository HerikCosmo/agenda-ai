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

    public function selectAllByUser()
    {
        try {
            $query = "SELECT * FROM contatos where id_usuario = :id_usuario order by nome asc";

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':id_usuario', $this->id_usuario);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    public function insert()
    {
        try {
            $query = "INSERT INTO contatos(nome, email, telefone, id_usuario) values (:nome, :email, :phone, :id_usuario)";

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":nome", $this->nome);
            $stmt->bindValue(":email", $this->email);
            $stmt->bindValue(":phone", $this->telefone);
            $stmt->bindValue(":id_usuario", $this->id_usuario);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function selectById()
    {
        try {
            $query = "SELECT * FROM contatos where id = :id";

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":id", $this->id);

            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function update()
    {
        try {
            $query = "UPDATE contatos set nome = :nome, email = :email, telefone = :phone where id = :id";

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":nome", $this->nome);
            $stmt->bindValue(":email", $this->email);
            $stmt->bindValue(":phone", $this->telefone);
            $stmt->bindValue(":id", $this->id);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function delete()
    {
        try {
            $query = "DELETE FROM contatos where id = :id";

            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":id", $this->id);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
