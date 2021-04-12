<!-- This is the OOP class for the database connection for testing -->

<?php

class Database{
    private $host = '127.0.0.1';
    private $username = 'root';
    private $password = '';
    private $database = 'justgotech';
    protected $connection;
    
    public function __construct(){
        if (!isset($this->connection)) {
          $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
          if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
          else{
              echo 'connection successful';
            }
        }    
       return $this->connection;
    }
}
?>
