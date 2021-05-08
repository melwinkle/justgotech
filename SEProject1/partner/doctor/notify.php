<?php 

require_once("../../database/connection.php");

    if(!isset($_SESSION['username'])){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
           // $password = md5(sha1($_POST['password']));
			
               $pass=$_POST['password'] ;
             

            $query = "SELECT * from Doctor WHERE Docuser = '$username' and Dpassword = '$pass'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results ){
				$row=mysqli_fetch_assoc($sql);
				$del=$row['DocID'];
				$fn=$row['DocFname'];
                $ln=$row['DocLname'];
                $dept=$row['Department'];
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['docid']=$del;
				$_SESSION['fname']=$fn;
                $_SESSION['lname']=$ln;
                $_SESSION['dept']=$dept;
                header("Location: ../doctor/dashdoc.php?success=true");
            }
            
        }
    }




    if(isset($_POST['register'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $gdept= $_POST['dept'];
        $phonenumber=$_POST['num'];
        $password = md5(sha1($_POST['password']));
        
                    
        $query = "INSERT INTO Doctor(DocFname,DocLname,Department,Dpassword,Docuser,Docnum) VALUES ('$firstname', '$lastname', '$dept', '$password', '$username','$phonenumber')";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ../doctor/doc_log.php?success");
        }
        else{
            header("Location: ../doctor/docreg.php?fail");
        }
        
    }

?>