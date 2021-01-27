<?php 
session_start();

if (!isset($_SESSION["isLogged"])) {
    header("Location: ../views/login.php");
}

$_REQUEST["id"];

header("Location: ../app/index.php")
?>

