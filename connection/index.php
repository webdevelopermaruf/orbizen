<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orbizenstudio";

// Create connection
try{
    $conn = new mysqli($servername, $username, $password, $dbname);
}catch (mysqli_sql_exception $e){
    include '../404.php';
    exit();
}?>