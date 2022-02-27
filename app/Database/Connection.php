<?php

namespace App\Database;

use App\Addon\DotEnv;

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
        (new DotEnv(__DIR__.'/../../.env'))->load();
        self::$driver = getenv('DB_DRIVER');
        self::$host = getenv('DB_HOST');
        self::$dbName = getenv('DB_NAME');
        self::$user = getenv('DB_USER');
        self::$pass = getenv('DB_PASS');

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