<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "../config/Dbh.php";
    require_once "../controllers/User.controllers.php";

    // $dbh = new Dbh();
    // $dbh->connectToBD();
    $signupUser = new User($username, $email, $password);
    $signupUser->signupUser();
}else{
    header("Location: ../index.php");
}