<?php

include_once "../database/Connection.php";

class UserModel extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAllUsers()
    {
        try {
            $sql = "SELECT * FROM users";
            $connection = $this->getConnection();
            $statement = $connection->query($sql);
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        } finally {
            $this->closeConnection();
        }
    }

    public function findUserById(int $id)
    {
        try {
            $sql = "SELECT * FROM users WHERE user_id = :id";
            $connection = $this->getConnection();
            $statement = $connection->prepare($sql);
            $statement->bindParam(":id", $id);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
        } finally {
            $this->closeConnection();
        }
    }

    public function update(User $user, int $id)
    {
        try {
            $sql = "UPDATE users 
                    SET username = :username, password = :password, email = :email, 
                        first_name = :firstName, last_name = :lastName  
                    WHERE user_id = :id";
            $connection = $this->getConnection();
            $statement = $connection->prepare($sql);
            $statement->bindParam(":username", $user->getUsername());
            $statement->bindParam(":password", $user->getPassword());
            $statement->bindParam(":email", $user->getEmail());
            $statement->bindParam(":firstName", $user->getFirstName());
            $statement->bindParam(":lastName", $user->getLastName());
            $statement->bindParam(":id", $id);
            $statement->execute();
            return true;
        } catch (\PDOException $ex) {
            return false;
            echo $ex->getMessage();
        } finally {
            $this->closeConnection();
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM users WHERE user_id = :id";
            $connection = $this->getConnection();
            $statement = $connection->prepare($sql);
            $statement->bindParam(":id", $id);
            $statement->execute();
            return true;
        } catch (\PDOException $ex) {
            return false;
            echo $ex->getMessage();
        } finally {
            $this->closeConnection();
        }
    }

    public function deleteAll()
    {
        try {
            $sql = "DELETE FROM users";
            $connection = $this->getConnection();
            $connection->query($sql);
            return true;
        } catch (\PDOException $ex) {
            return false;
            echo $ex->getMessage();
        } finally {
            $this->closeConnection();
        }
    }
}
