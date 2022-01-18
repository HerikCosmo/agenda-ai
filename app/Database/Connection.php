<?php

namespace App\Database;

class Connection
{
    private static $driver;
    private static $host;
    private static $dbName;
    private static $user;
    private static $pass;
    private $conn = null;

    public function __construct()
    {  
        self::$driver = 'mysql';
        self::$host = 'localhost';
        self::$dbName = 'agenda_contatos';
        self::$user = 'root';
        self::$pass = 'root';

        try {
            $stringConnection = self::$driver.':host='.self::$host.';dbname='.self::$dbName;
            $this->conn = new \PDO($stringConnection, self::$user, self::$pass);
        }catch(\PDOException $e){
            echo 'erro ao conectar ao db: ' . $e->getMessage();
        }
    }

    public function getConn(){
        return $this->conn;
    }
}