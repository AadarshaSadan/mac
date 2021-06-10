<?php
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["fullname"];
$date = date('Y-m-d h:s:i');
if(isset($email) and isset($password) and isset($name))
{
   $con = require_once '../../../config/database.php';
    session_start();

    $result = $con->query("SELECT * FROM user WHERE email='$email'");

    if($result->num_rows===0)// this means given email is not registered yet.
    {
    $con->query("INSERT INTO user(email,password,name,created_at) VALUES('$email','$password','$name','$date')");
    $_SESSION['status'] = "Account has been registered, Please Login to proceed";
    header("location: ../../views/forms/login.php");
    }
    else{
        //that email is already registered

        $_SESSION['status'] = "Email is already registred, try new email";
        header("location:../../views/forms/register.php");

    }
}
else{

    echo "empty fields";
    die();
}