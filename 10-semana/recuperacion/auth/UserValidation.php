<?php
$_SESSION['usuario'] = null;
$_SESSION['invalid'] = null;

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
                        $_SESSION['invalid'] = "Contraseña invalida";
                        header("Location: ./login.php");
                    }
                } else {
                    $_SESSION['invalid'] = "Usuario invalido";
                    header("Location: ./login.php");
                }
            } else {
                echo "Error al ejecutar la query";
            }
        } catch (\Throwable $ex) {
            echo $ex->getMessage();
        }
    }
}