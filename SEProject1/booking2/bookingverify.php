<?php

/****
 * This file is used to verify the booking details  of the user. It includes the  database file and the form in booking.php 
 * If the user input is correctly filled in, it inserts it into the database.
 */
    require_once('booking.php');
    // require('connection.php'); 


    //I manually placed the database connection to see if will work
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'justgotech';

    $conn = mysqli_connect($host, $username, $password, $databasename);
    echo "connection established";

    if(!$conn){
        die("<script>alert('Connection To Database Failed')</script>");
    }

     
    if(isset($_POST['submit'])){
        $patient = $_POST['patient'];
        $doctor = $_POST['doctor'];
        $healthInsu = $_POST['healthIn'];
        $InName = $_POST['Insurname'];
        $InID = $_POST['InsurId'];
        $BookingR = $_POST['bookreason'];
        $Appdate = $_POST['appDate'];
        $Apptime = $_POST['apptime'];
        $Departm = $_POST['departm'];
 
        //the sql inserts into the database columns
        $sql = "INSERT INTO booking (Appointment,Department,Reason,Insurance,Insurance_Name,Insurance_ID,Doctor,ApTime, Person, PatientID) 
         VALUES('{$Appdate}', '{$Departm}', '{$BookingR}', '{$healthInsu}', '{$InName}', '{$InID}', '{$doctor}', '{$Apptime}', '{$patient}', '1')";
            //$db = openConnection();

            $results = mysqli_query($conn, $sql); 
            if ($results) {
                echo "record inserted";
                header("Location: ../client/tracker/tracker.php");
             }
            
            else {
               echo "connection failed";
               
            }
        }
        mysqli_close($conn);
    ?>
