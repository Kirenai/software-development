<?php 

$hostname = 'localhost';
$database = 'registro';
$username = 'root';
$password = '';

$dsn = "mysql:host=$hostname;dbname=$database";

try {
  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $e) {
  echo "Error ".$e->getMessage();
}

/* $conexion = mysqli_connect($hostname, $username, $password, $database);

if ($conexion) {
  
} else {
  echo 'Error';
} */