<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (fullname, email, password) VALUES (:fullname, :email, :password);";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":fullname", $fullname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        
        $stmt->execute();

        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die();
    } catch (PDOException $error) {
        die("query failed " . $error->getMessage());
    }
}else{
    header("Location: ../index.php");
}