<!-- This is the OOP class for the database connection for testing -->

<?php

class Database{

    private $host = 'us-cdbr-east-03.cleardb.com';
    private $username = 'b242d5083dc100';
    private $password = 'bd14bf3f';
    private $database = 'heroku_c9b858a1f702a48';
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
