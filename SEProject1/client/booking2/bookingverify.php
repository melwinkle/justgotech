<?php

/****
 * This file is used to verify the booking details  of the user. It includes the  database file and the form in booking.php 
 * If the user input is correctly filled in, it inserts it into the database.
 */
session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = './logout.php'</script>";
}
   
    require_once('../../database/connection.php'); 


    // //I manually placed the database connection to see if will work
    // $host = 'localhost';
    // $username = 'root';
    // $password = '';
    // $databasename = 'justgotech';

    // $conn = mysqli_connect($host, $username, $password, $databasename);
    // if ($conn){
    // echo "connection successful";
    // }
    // else{
    //     die("<script>alert('Connection To Database Failed')</script>");
    // }

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
            header("Location: ../booking2/viewbooking.php");
        }
        else{
        mysqli_error($conn);
        }


        // $sql = "INSERT INTO `booking`(`Appointment`, `Department`, `Reason`, `Insurance`, `Insurance_Name`, `Insurance_ID`, `Doctor`, `ApTime`, `Person`, `PatientID`)
        //  VALUES ('2021-04-15' ,'Pediatrics' ,'sdfcc' ,'Yes' ,'ergcggccc' ,'445452' ,'Dr.Rita' ,'18:08' ,'Self', '1')";

        // $res1 = mysqli_query($conn, $sql);
          
 
        //the sql inserts into the database columns
        // $sql = "INSERT INTO booking (Appointment, Department,Reason,Insurance,Insurance_Name,Insurance_ID,Doctor,ApTime, Person, PatientID) 
        //  VALUES($Appdate, $Departm, $BookingR, $healthInsu, $InName, $InID, $doctor, $Apptime, $patient, 1)";
            
        // $sql2 = "INSERT INTO `booking` (`BID`, `Appointment`, `Department`, `Reason`, `Insurance`, `Insurance_Name`, `Insurance_ID`, `Image`, `Doctor`, `ApTime`, `Person`, `PatientID`) 
        //VALUES ('2', '23/04/2021', 'Optics', 'fgfgbcbcncncn', 'Yes', 'ghghncncmccckkc', '562902', 'img1.png')";
        
        //     $results = mysqli_query($conn, $sql); 
        //     //var_dump($results);
        //     if ($results) {
        //         echo "record inserted";
        //         header("Location: ../client/tracker/tracker.php");
        //      }
            
        //     else {
        //        echo "xxxxxxxxxxxxx" .$results; 
               
        //     }
         }

        //mysqli_close($conn);

    ?>
