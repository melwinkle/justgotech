<?php 
    require_once("../../database/connection.php");

    if(!isset($_SESSION['username'])){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5(sha1($_POST['password']));
            function success($username){
                session_start();
                $_SESSION['username'] = $username;
                echo "<script>location.href = '../tracker/tracker.php';</script>";
            }

            $query = "SELECT * from customer WHERE `username` = '$username' and `email`='$email' and `userpassword` = '$password'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results == 0){
                die("<script>alert('Login failed'); location.href = './login.php';</script>");
            }
            success($username);
        }
    }
?>