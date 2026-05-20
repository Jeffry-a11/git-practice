<?php

$host ="localhost";
$user = "root";
$password = "";
$dbname = "db_dontono";
$conn = mysqli_connect($host, $user, $password, $dbname);
if (mysqli_connect_errno()) {   
    die("Error de Conexion".$conn->connect_error);  
}

$conn->set_charset("utf8mb4");


?>