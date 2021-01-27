<?php
$_SESSION["idlogged"] = null;
$_SESSION["isLogged"] = null;
class AuthModel extends Connection
{
    public function __construct() {
        parent::__construct();
    }

    public function findUserByUsernameAndPassword(LoginRequest $loginRequest) {
        $username = $loginRequest->getUsername();
        $password = $loginRequest->getPassword();
        $sql = "SELECT * FROM users WHERE username = :username && password = :password";
        $connection = $this->getConnection();
        try {
            $statement = $connection->prepare($sql);
            $statement->bindParam(":username", $username);
            $statement->bindParam(":password", $password);
            $statement->execute();
            if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $_SESSION["idlogged"] = $row["user_id"];
                $_SESSION["isLogged"] = true;
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
        } finally {
            $this->closeConnection();
        }
    }

    public function saveUser(User $user)
    {
        $sql = "INSERT INTO users (username, password, email, first_name, last_name)
                VALUES (:username, :password, :email, :first_name, :last_name)";

        $connection = $this->getConnection();
        try {
            $statement = $connection->prepare($sql);
            $username = $user->getUsername();
            $password = $user->getPassword();
            $email = $user->getEmail();
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $statement->bindParam(":username", $username);
            $statement->bindParam(":password", $password);
            $statement->bindParam(":email", $email);
            $statement->bindParam(":first_name", $firstName);
            $statement->bindParam(":last_name", $lastName);
            $statement->execute();
            return true;
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
        } finally {
            $this->closeConnection();
        }
        return false;
    }
}

?>