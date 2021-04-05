<?php

/****
 * This file is used to verify the booking details  of the user. It includes the  database file and the form in booking.php 
 * If the user input is correctly filled in, it inserts it into the database.
 */
    // require_once('booking.php');
    // // require('connection.php'); 


    //I manually placed the database connection to see if will work
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'justgotech';

    $conn = mysqli_connect($host, $username, $password, $databasename);
    if ($conn){
    echo "connection successful";
    }
    else{
        die("<script>alert('Connection To Database Failed')</script>");
    }

     
    if(isset($_POST['submit'])){
        $patient = $_POST['patient'];
        echo "v1" . $patient  . "<br>";
        $doctor = $_POST['doctor'];
        echo "v1" . $doctor. "<br>";
        $healthInsu = $_POST['healthIn'];
        $InName = $_POST['Insurname'];
        $InID = $_POST['InsurId'];
        $BookingR = $_POST['bookreason'];
        $Appdate = $_POST['appDate'];
        $Apptime = $_POST['apptime'];
        $Departm = $_POST['departm'];
 
        //the sql inserts into the database columns
        $sql = "INSERT INTO booking (Appointment, Department,Reason,Insurance,Insurance_Name,Insurance_ID,Doctor,ApTime, Person, PatientID) 
         VALUES($Appdate, $Departm, $BookingR, $healthInsu, $InName, $InID, $doctor, $Apptime, $patient, 1)";
            
        // $sql2 = "INSERT INTO `booking` (`BID`, `Appointment`, `Department`, `Reason`, `Insurance`, `Insurance_Name`, `Insurance_ID`, `Image`, `Doctor`, `ApTime`, `Person`, `PatientID`) 
        //VALUES ('2', '23/04/2021', 'Optics', 'fgfgbcbcncncn', 'Yes', 'ghghncncmccckkc', '562902', 'img1.png')";
        
            $results = mysqli_query($conn, $sql); 
            var_dump($results);
            if ($results) {
                echo "record inserted";
                header("Location: ../client/tracker/tracker.php");
             }
            
            else {
               echo "record not inserted";
               
            }
        }
        mysqli_close($conn);
    ?>
