<?php

/****
 * This file is used to verify the booking details  of the user. It includes the  database file and the form in booking.php 
 * If the user input is correctly filled in, it inserts it into the database.
 */
// session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = './logout.php'</script>";
}
    require_once('booking.php');
    require_once('../../database/connection.php'); 

$username=$_SESSION['username'];
$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

$PatientID=$row['PatientID'];
     
    if(isset($_POST['submit'])){
        $person = $_POST['patient'];
        $doctor = $_POST['doctor'];
        $insure = $_POST['healthIn'];
        $inname = $_POST['Insurname'];
        $inid = $_POST['InsurId'];
        $reason = $_POST['bookreason'];
        $apdate = $_POST['appDate'];
        $time = $_POST['apptime'];
        $dept = $_POST['departm'];

        $quer="SELECT DocID from Doctor where DocFname='$doctor'";
        $resu=mysqli_query($conn,$quer);
        $raw=mysqli_fetch_assoc($resu);

        $doct=$raw['DocID'];
        $quey="INSERT INTO booking(Appointment,Department,Reason,Insurance,Insurance_Name,Insurance_ID,Doctor,ApTime,Person,PatientID) VALUES ('$apdate','$dept','$reason','$insure','$inname','$inid','$doct','$time','$person','$PatientID')";
        $resut=mysqli_query($conn,$quey);
        if($resut){
            header("Location: viewbooking.php");
        }

        else{
            mysqli_error($conn);
        }
       }

    mysqli_close($conn);

    ?>
