<?php 
session_start();

include "auth/UserValidation.php";
include "auth/UserRegistration.php";
include "connection/Connection.php";

$_SESSION["validate"] = null;

if (isset($_POST['login'])) {
    new UserValidation();
} else if (isset($_POST['register'])) {
    new UserRegistration();
}

?>