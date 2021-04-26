<?php

include_once("config.php");

if(isset($_POST['register'])) {
    $con = config::config();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    ifinsertDetails($con,$username,$email,$password));{
        echo "details inserted"
    }

}

function insertDetails($con,$username,$email,$password){
    $query = $con->prepare("
    
    INSERT INTO users (username, email, password)

    VALUES(:username, :email, :password)
    
    ");

    $query->bindParam(":username,$username");
    $query->bindParam(":email,$email");
    $query->bindParam(":password,$password");

    return $query->execute();



}

?>