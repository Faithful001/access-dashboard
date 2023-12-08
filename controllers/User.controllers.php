<?php

class User extends Dbh{
    private $username;
    private $email;
    private $password;
    public $errors = [];

    public function __construct($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->password =$password;
    }

    private function fieldsAreEmpty($username, $email, $password){
        if(empty($username || $email || $password)){
            return true;
        }else{
            return false;
        }
    }

    private function existingEmail($email){
        try {
            $query = "SELECT email FROM users WHERE email = :email;";
            $stmt = parent::connectToDB()->prepare($query);
            $stmt->bindParam(":email", $this->email);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($result){
                header("Location: ../index.php");
                return true && $result;
            }else{
                header("Location: ../index.php");
                return false && die();
            }
            
        } catch (PDOException $error) {
            header("Location: ../index.php");
            die("Connection failed" . $error);
            throw $error;
        }
    }



    public function signupUser(){
        if(fieldsAreEmpty($this->username, $this->email, $this->password)){
            echo $errors["empty_fields"] = "All fields are required";
            header("Location: ../index.php");
            die();
        }
        if(invalidEmail($this->email)){
            echo $errors["invalid_email"] = "Invalid email";
            header("Location: ../index.php");
            die();
        }
        if (existingEmail($this->email)){
            echo $errors["existing_email"] = "email already in use";
            header("Location: ../index.php");
            die();
        }
        try {
            $options = ["cost"=>12];
            $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT, $options);
            $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password);";
            $stmt = parent::connectToDB()->prepare($query);
            
            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $hashedPassword);
            
            $stmt->execute();
            
            $pdo = null;
            $stmt = null;

            header("Location: ../index.php");
            die();
        }
        catch (PDOException $error) {
            die("connection failed: " . $error);
            header("Location: ../index.php");
        }

    
}
}
