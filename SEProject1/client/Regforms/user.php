<?php 

require_once("../../database/connection.php");

    if(!isset($_SESSION['username'])){
        // if(isset($_POST["login"])){
            $username = $_POST['q24_username'];
            $password = md5(sha1($_POST['q29_password']));
           // $password =$_POST['q29_password'];
            $query = "SELECT * from customer WHERE username = '$username' and  userpassword = '$password'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results ){
                session_start();
                $_SESSION['username'] = $username;
                header("Location: ../tracker/tracker.php");
            }
            else{
                header("Location: ../Regforms/login.html?details=false");
            }
           
        // }
        // header("Location: ../Regforms/login.html?login=false");
    }


?>