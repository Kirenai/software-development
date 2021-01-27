<?php 

class Config
{
    private $hostname = "localhost";
    private $database = "sistema";
    private $username = "root";
    private $password = "";

    public function __construct() {}

    /**
     * Get the value of hostname
     */ 
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Get the value of database
     */ 
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }
}

?>