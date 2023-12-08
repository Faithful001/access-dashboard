<?php

if($_SESSION["REQUEST_METHOD"] == "POST"){
    $fullname = $_POST["fullname"];
    try {
        require_once "dbh.inc.php";
        $query = "SELECT * FROM users WHERE fullname = :fullname;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":fullname", $fullname);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

        header("Location: ./search.php");
        
    } catch (PDOException $error) {
        die("Something went wrong " . $error->getMessage());
    }
}else{
    header("Location: ./search.php");
}