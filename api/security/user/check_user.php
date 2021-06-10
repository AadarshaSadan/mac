<?php

    $email = $_POST["email"];
    $password = $_POST["password"];

    $con = require_once '../../../config/database.php';
    $result = $con->query("SELECT * FROM user where email = '$email' and password='$password' LIMIT 1");


    session_start();
    if($result->num_rows<=0){

        $_SESSION["status"] = "Email or password doesnot match";
        $_SESSION["logged_in"] = false;
        header("location:  ../../../views/forms/login.php");

    }
   
    else 
    {
        $data = $result->fetch_assoc();
        $_SESSION["id"]=$data["id"];
        $_SESSION["email"] = $data["email"];
        $_SESSION["name"] = $data["name"];
        $_SESSION["logged_in"] = true;
        header("location: ../../../index.php");
        die();
    }
?>