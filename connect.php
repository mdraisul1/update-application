<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "password";
$db_name = "demo_two";

// database connection query
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn){
    die("Database connection failed");
}


