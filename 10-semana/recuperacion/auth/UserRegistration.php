<?php

$_SESSION['no-add'] = null;

class UserRegistration
{
  private $username;
  private $password;
  private $firstName;
  private $lastName;

  private $connection;
  private $conn;
  private $statement;

  public function __construct()
  {
    $this->username = $_POST['username'];
    $this->password = $_POST['password'];
    $this->firstName = $_POST['firstname'];
    $this->lastName = $_POST['lastname'];

    $this->connection = new Connection();
    $this->conn = $this->connection->getConnection();

    $this->addUser();
  }

  public function addUser()
  {
    $sql = "INSERT INTO users (`username`, `password`, `fist_name`, `last_name`)
            VALUES (:username, :pass, :firstname, :lastname)";
    $this->statement = $this->conn->prepare($sql);
    $this->statement->bindParam(":username", $this->username);
    $this->statement->bindParam(":pass", $this->password);
    $this->statement->bindParam(":firstname", $this->firstName);
    $this->statement->bindParam(":lastname", $this->lastName);

    try {
      if (
        $this->statement->execute() &&
        $this->isEmpty(
          $this->username,
          $this->password,
          $this->firstName,
          $this->lastName
        )
      ) {
        header("Location: ./login.php");
      } else {
        $_SESSION['no-add'] = "Error al crear la cuenta";
        header("Location: ./register.php");
      }
    } catch (\PDOException $ex) {
      echo $ex->getMessage();
    }
  }

  private function isEmpty($username, $password, $firstName, $lastName)
  {
    if ($username === '' || $password === '' || $firstName === '' || $lastName === '') {
      return false;
    }
    return true;
  }
}