<?php
session_start();
// $dbservername = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// Create connection
//$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
// Check connection

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "macs_technology");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>