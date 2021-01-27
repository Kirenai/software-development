<?php 
include_once 'Config.php';

class Connection 
{
    private $hostname;
    private $database;
    private $username;
    private $password;
    protected $connection;

    protected function __construct() 
    {
        $config = new Config();
        $this->hostname = $config->getHostname();
        $this->database = $config->getDatabase();
        $this->username = $config->getUsername();
        $this->password = $config->getPassword();

        try {
            $this->connection = new PDO(
                "mysql:host=$this->hostname;dbname=$this->database;", 
                $this->username, 
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    protected function getConnection() 
    {
        return $this->connection;
    }

    protected function closeConnection() {
        $this->connection = null;
    }
}