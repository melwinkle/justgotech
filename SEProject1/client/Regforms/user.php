<?php 

require_once("../../database/connection.php");

    if(!isset($_SESSION['username'])){
        if(isset($_POST['login'])){
            $username = $_POST['q24_username'];
            $password = md5(sha1($_POST['q29_password']));
            echo $username; echo $password;
            function success($username){
                session_start();
                $_SESSION['username'] = $username;
                echo "<script>location.href = '../tracker/tracker.php';</script>";
            }

            $query = "SELECT * from customer WHERE username = '$username' and  userpassword = '$password'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results == 0){
                die("<script>alert('Login failed'); location.href = './login.html';</script>");
            }
            success($username);
        }
        echo "as£m";
    }


?>