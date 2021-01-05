<?php
session_name("loginUser");
session_start();
$_SESSION['usuario'] = null;

include "../connection/Connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$connection = new Connection();
$conn = $connection->getConnection();

$sql = "SELECT * FROM users WHERE username = :username";

$statement = $conn->prepare($sql);
$statement->bindParam(":username", $username);

try {
    if ($statement->execute()) {
        $row = $statement->fetch();
        if (isset($row['username']) && $row['username'] === $username) {
            if (isset($row['password']) && $row['password']  === $password) {
                $_SESSION['usuario'] = $row['username'];
                header("Location: ../home.php");
            } else {
                echo "contraseña incorrecta
                    <br> <a href='../login.php'>Try again</a>";
            }
        } else {
            echo "usuario incorrecto
                <br> <a href='../login.php'>Try again</a>";
        }
    }
} catch (\PDOException $ex) {
    echo $ex->getMessage();
}
