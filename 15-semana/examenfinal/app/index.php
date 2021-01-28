<?php
include "../database/Connection.php";
include "controller/AuthController.php";
include "model/AuthModel.php";
include "model/dao/User.php";
include "model/payload/LoginRequest.php";
include_once "controller/UserController.php";
include_once "model/UserModel.php";

session_start();

$_SESSION["deleteall"] = false;

if (!isset($_SESSION["isLogged"])) {
    header("Location: ../views/login.php");
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $loginRequest = new LoginRequest($username, $password);
    $AuthController = new AuthController();
    $result = $AuthController->validUser($loginRequest);
    if ($result) {
        header("Location: ../views/home.php?logged=primary");
    } else {
        header("Location: ../views/login.php?info=danger");
    }
}

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $user = new User($username, $password, $email, $firstName, $lastName);
    $AuthController = new AuthController();
    $result = $AuthController->registerUser($user);
    if ($result) {
        header("Location: ../views/login.php?registered=success");
    } else {
        header("Location: ../views/register.php?info=danger");
    }
}

if (isset($_POST["adduser"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $user = new User($username, $password, $email, $firstName, $lastName);
    $AuthController = new AuthController();
    $result = $AuthController->registerUser($user);
    if ($result) {
        header("Location: ../views/users.php?registered=success");
    } else {
        header("Location: ../views/adduser.php?info=danger");
    }
}

if (isset($_POST["updateuser"])) {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $user = new User($username, $password, $email, $firstName, $lastName);
    $userController = new UserController();
    $result = $userController->updateUser($user, $id);
    if ($result) {
        header("Location: ../views/update-delete.php?update=success");
    } else {
        header("Location: ../views/adduser.php?id=$id&info=danger");
    }
}

if (isset($_REQUEST["iddelete"])) {
    $id = $_REQUEST["iddelete"];
    $userController = new UserController();
    $result = $userController->deleteUser($id);
    if ($result) {
        header("Location: ../views/update-delete.php?delete=success");
    } else {
        header("Location: ../views/update-delete.php?info=danger");
    }
}

if (isset($_REQUEST["deleteall"])) {
    $userController = new UserController();
    $userController->deleteAllUsers();
    header("Location: ../views/update-delete.php?deleteall=success");
}




?>