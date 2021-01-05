<?php

class Connection
{
    private $conn;
    private $hostname = 'localhost';
    private $database = 'sistema';
    private $username = 'root';
    private $password = '';

    public function __construct()
    {
        $dns = "mysql:host=$this->hostname;dbname=$this->database";
        try {
            $this->conn = new PDO($dns, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
