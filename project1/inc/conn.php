<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';  
$user = 'users';  
$password = 'root'; 
$database = 'project';  

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Database Connection Failed: ' . mysqli_connect_error());
}
?>