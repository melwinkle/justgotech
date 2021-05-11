<!-- This is the OOP class for the unit testing -->

<?php

include_once('Database.php');
class Person extends Database{
  
    public function __construct(){
        parent::__construct();
       
    }

    public function check_login($username, $password){
        $sql = "SELECT * FROM customer WHERE username = '$username' AND userpassword = '$password'";
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            echo "\n(1)Login Succesful";
            return true;
        }
        else{
            echo "\n(1)User not Found";
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

    public function check_chatbot($mess){
        $sql = "SELECT Replies FROM chatbot WHERE Queries LIKE '%$mess%'";
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            echo "\n(1)chatbot is active";
            return true;
        }
        else{
            return false;
        }
    }


    
    public function getsql($sql){
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            echo "\n(2)Patient Details Exist";
            return true;
        }else{
            return false;
        }
    }

    
    public function getname($sql){
        $query = $this->connection->query($sql);
        if($query->num_rows > 0){
            $row = $query->fetch_array();
            echo "\n(3)Patient First Name Exist";
            return $row[0];
        }else{
            return false;
        }
    }


    public function newdoc($sql){
        $query = $this->connection->query($sql);
        if($query){
            echo "\n(4)New Doctor Added";
            return true;
        }else{
            return false;
        }
    }
    public function newpro($sql){
        $query = $this->connection->query($sql);
        if($query){
            echo "\n(5)Order Processed";
            return true;
        }else{
            return false;
        }
    }

    public function newdel($sql){
        $query = $this->connection->query($sql);
        if($query){
            echo "\n(5)Rider has accepted order";
            return true;
        }else{
            return false;
        }
    }


    public function screen($sql){
        $query = $this->connection->query($sql);
        if($query){
            $row = $query->fetch_array();
            echo "\n(6)Screening Status:".$row['Status'];
            return true;
        }else{
            return false;
        }
    }

    public function cart($sql){
        $query = $this->connection->query($sql);
        if($query){
           
            echo "\n(7)Item Added to Cart";
            return true;
        }else{
            return false;
        }
    }

   
}
?>