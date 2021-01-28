<?php 

class Config
{
    private $hostname = "localhost";
    private $database = "sistema";
    private $username = "root";
    private $password = "";

    public function __construct() {}

    public function getHostname()
    {
        return $this->hostname;
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getUsername()
    {
        return $this->username;
    }
}

?>