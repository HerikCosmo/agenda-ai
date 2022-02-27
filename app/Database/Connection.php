<?php

namespace App\Database;

use Dotenv\Dotenv;

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
        if(is_file(__DIR__.'/../../.env')){
            $dotenv = Dotenv::createImmutable(__DIR__.'/../../');
            $dotenv->load();
        }
        
        self::$driver = $_ENV['DB_DRIVER'];
        self::$host = $_ENV['DB_HOST'];
        self::$dbName = $_ENV['DB_NAME'];
        self::$user = $_ENV['DB_USER'];
        self::$pass = $_ENV['DB_PASS'];

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