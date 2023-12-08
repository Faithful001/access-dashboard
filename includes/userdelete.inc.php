<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE fullname = :fullname AND password = :password;";
        $stmt = $pdo->prepare($query);
        
        $stmt->bindParam(":fullname", $fullname);
        $stmt->bindParam(":password", $password);

        $stmt->execute();
        $pdo = null;
        $stmt = null;
        header("Location: ../delete.php");
        die();
    } catch (PDOException $error) {
        die("Connection error: " .  $error->getMessage());
    }


}else{
    header("Location: ../delete.php");
}