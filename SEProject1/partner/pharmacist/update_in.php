<!-- page to update inventory and login and signup-->
<?php 

require_once("../../database/connection.php");

    if(!isset($_SESSION['username'])){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = md5(sha1($_POST['password']));
         
                
             

            $query = "SELECT * from pharmacists WHERE PhID = '$username' and Phpassword = '$password'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results ){
				$row=mysqli_fetch_assoc($sql);
				$del=$row['Pharm_ID'];
				$fn=$row['Pharm_Name'];
				$ln=$row['Location'];
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['phid']=$del;
				$_SESSION['phname']=$fn;
				$_SESSION['location']=$ln;
                header("Location: ../pharmacist/dash.php?success=true");
            }
            
        }
    }


    if(isset($_POST['register'])){
        $firstname=$_POST['phid'];
        $lastname = $_POST['phname'];
        $dob=$_POST['location'];
        $phonenumber=$_POST['phnumber'];
        $lq=$_POST['locq'];
        $password = md5(sha1($_POST['password']));
        
                    
        $query = "INSERT INTO pharmacists(Phid,Phpassword,Pharm_Name,Location,Location_queries,Phnumber) VALUES ('$firstname','$password', '$lastname',  '$dob', '$lq','$phonenumber')";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("Location: ../pharmacist/pharm_log.php?success");
        }
        else{
            header("Location: ../pharmacist/pharm_reg.php?fail");
        }
        
    }




?>