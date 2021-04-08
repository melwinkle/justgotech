<?php 
require_once("../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = './logout.php'</script>";
}


$username=$_SESSION['username'];

if(isset($_POST['edit'])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob=$_POST['dob'];
    $nationality=$_POST['nationality'];
    $phonenumber=$_POST['phone'];
    

    
                
    $query = "UPDATE set firstname='$firstname',lastname='$lastname',gender='$gender',dob='$dob',nationality='$nationality',phonenumber='$phonenumber' WHERE username='$username'";
    $sql = mysqli_query($conn,$query);

    if(!$sql){
        echo "Error eu"; 
    }
    else{

    
    echo "<script>
            alert('Account Updated Successfully');
            location.href = '../account/accountinfo.php';
        </script>"; 
    }
}



?>