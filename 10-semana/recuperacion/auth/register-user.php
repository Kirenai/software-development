<?php 

include "../connection/Connection.php";

$username = $_POST['username'];
$password = $_POST['password'];
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];

$connection = new Connection();
$conn = $connection->getConnection();

$sql = "INSERT INTO users (`username`, `password`, `fist_name`, `last_name`)
        VALUES (:username, :pass, :firstname, :lastname)";

$statement = $conn->prepare($sql);
$statement->bindParam(":username", $username);
$statement->bindParam(":pass", $password);
$statement->bindParam(":firstname", $firstName);
$statement->bindParam(":lastname", $lastName);

try {
    if ($statement->execute() && isEmpty($username, $password, $firstName, $lastName)) {
        header("Location: ../login.php");
    } else {
        header("Location: ../register.php");
    }
} catch (\PDOException $ex) {
    echo $ex->getMessage();
}

function isEmpty($username, $password, $firstName, $lastName)
{
  if ($username === '' && $password === '' && $firstName === '' && $lastName === '') {
    return false;
  }
  return true;
}