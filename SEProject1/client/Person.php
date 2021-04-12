<!-- This is the OOP class for the unit testing -->


<?php


include_once('Database.php');
class User extends Database{
  
    public function __construct(){
        parent::__construct();
       
    }

    public function check_login($username, $password){
        $sql = "SELECT * FROM customer WHERE username = '$username' AND userpassword = $password";
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            echo "\n(1)Login Succesful";
            return true;
        }
        else{
            return false;
        }
    }


    public function book_appoint($patientID){
        $sql = "SELECT * FROM booking WHERE patientID = '$patientID'";
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            echo "\n(1)booking Succesful";
            return true;
        }
        else{
            return false;
        }
    }

    public function change_password($value){
        return $this->connection->real_escape_string($value);
    }

    public function getsql($sql){
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            echo "\n(2)User Details Exist";
            return true;
        }else{
            return false;
        }
    }

    public function getname($sql){
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            $row = $query->fetch_array();
            echo "\n(3)User First Name Exist";
            return $row[0];
        }else{
            return false;
        }
    }


    public function numberr($sql){
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $query->num_rows;
        }else{
            return 0;
        }
    }

    public function addcustomer($sql){
        $query = $this->connection->query($sql);
        if($query){
            echo "\n(4)New Customer Added";
            return "succesful";
        }else{
            return 'error';
        }
    }

    public function checkd($sql){
        $query = $this->connection->query($sql);
        if($query){
            
            $row = $query->fetch_array();
            echo "\n(4)Department Exists ";
            return $row[0];
        }else{
            return 'error';
        }
    }
}
?>