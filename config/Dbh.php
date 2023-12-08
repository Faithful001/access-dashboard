<?php

class Dbh {
    private $dsn = "mysql:host=localhost;dbname=user";
    private $dbusername = "root";
    private $dbpassword = "";

    public function connectToDB(){
        try {
            $pdo = new PDO($this->dsn, $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $error) {
            die("Connection failed: " . $error);
        }
    }
}


$dbh = new Dbh();