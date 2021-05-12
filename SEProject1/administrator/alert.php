<?php
require_once("../database/connection.php");

if(!isset($_SESSION['adminick'])){
    if(isset($_POST['submit'])){
        $username = $_POST['adminick'];
     $password = md5(sha1($_POST['password']));
        
         
         

        $query = "SELECT * from admin_one WHERE AdminNick = '$username' and AdminPass = '$password'";
        $sql = mysqli_query($conn, $query);
        $results = mysqli_num_rows($sql);

        if($results ){
            $row=mysqli_fetch_assoc($sql);
            $del=$row['AdminID'];
            $fn=$row['AdminFName'];
            $ln=$row['AdminLName'];
            session_start();
            $_SESSION['AdminNick'] = $username;
            $_SESSION['AdminID']=$del;
            $_SESSION['AdminFName']=$fn;
            $_SESSION['AdminLName']=$ln;
            
            header("Location: ../administrator/mainadmin.php?success=true");
        }else{
            header("Location: ../administrator/adminlogin.php?fail");

        }
        
    }
}

if(isset($_POST['register'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $nickname = $_POST['adminick'];
        $mail= $_POST['adminmail'];
        $location=$_POST['location'];
        $password = md5(sha1($_POST['password']));
        
                    
        $query = "INSERT INTO admin_one(AdminFname,AdminLname,AdminNick,AdminPass,AdminLocation,AdminMail) VALUES ('$firstname', '$lastname', '$nickname', '$password', '$location','$mail')";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ../administrator/adminreg.php?success");
        }
        else{
            header("Location: ../administrator/adminreg.php?fail");
        }
        
    }


?>