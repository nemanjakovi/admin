<?php

class Database
{
    private $dbHost = "localhost";
    private $username = "root";
    private $dbPass = "";
    private $dbName = "admin";


    public function connect()
    {
        try {
            $dsn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName;
            $pdo = new PDO($dsn, $this->username, $this->dbPass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (Throwable $e) {
            echo "Connection faild!" .  $e->getMessage();
        }
    }
}
