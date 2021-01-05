<?php
session_start();
$_SESSION['usuario'] = null;

class UserValidation
{
    private $username;
    private $password;

    private $conn;
    private $connection;
    private $statement;

    public function __construct()
    {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];

        $this->connection = new Connection();
        $this->conn = $this->connection->getConnection();

        $this->validUser();
    }

    public function validUser()
    {
        $sql = "SELECT * FROM users WHERE username = :username";
        $this->statement = $this->conn->prepare($sql);
        $this->statement->bindParam(':username', $this->username);

        try {
            if ($this->statement->execute()) {
                $row = $this->statement->fetch();
                if (isset($row['username']) && $row['username'] === $this->username) {
                    if (isset($row['password']) && $row['password']  === $this->password) {
                        $_SESSION['usuario'] = $row['username'];
                        $_SESSION['validate'] = true;
                        header("Location: ./home.php");
                    } else {
                        echo "contraseña incorrecta
                            <br> <a href='./login.php'>Try again</a>";
                    }
                } else {
                    echo "usuario incorrecto
                        <br> <a href='./login.php'>Try again</a>";
                }
            } else {
                echo "Error al ejecutar la query";
            }
        } catch (\Throwable $ex) {
            echo $ex->getMessage();
        }
    }
}

// new UserValidation();

/* $username = $_POST['username'];
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
} */
