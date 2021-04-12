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
    

    $id="SELECT PatientID from customer where username='$username'";
    $idl=mysqli_query($conn,$id);
    $idt=mysqli_fetch_assoc($idl);
    $pid=$idt['PatientID'];
                
    $query = "UPDATE customer SET firstname='$firstname',lastname='$lastname',gender='$gender',dob='$dob',nationality='$nationality',phonenumber='$phonenumber' WHERE PatientID=$pid";
    $sql = mysqli_query($conn,$query);

    if(!$sql){
        mysqli_error($conn);
        echo $pid; 
    }
    else{

    
    echo "<script>
            alert('Account Updated Successfully');
            location.href = '../account/accountinfo.php';
        </script>"; 
    }
}



?>