<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Details</title>
</head>
<body>
  
<style>
  body{ background-color: #99ccff; }
  div{  margin: 305px; }

</style>
<div class= 'page'> 
<img src="./img/background.jpg" width="300" height="350">
    <h2 style ='align=center'> Your Booking Details</h2> 
            <?php
                // Include database file
                require_once('../../database/connection.php'); 
                
                session_start();
                //$sql1 = "";
                $userID = mysqli_insert_id($conn);
                //echo "ID ---------". $userID;

                //$sql = "SELECT * FROM booking  WHERE PatientID =$userID ";
                $sql = "SELECT * FROM booking ";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            //associative array
                            while ($row = mysqli_fetch_assoc($result)){
                                echo "<table>";
                                echo " <td  bgcolor = '#8080ff' ><td><a href = bookingverify.php?id=$row[BID]></br></td>
                                            <tr>
                                        <td>APPOINTMENT DATE:</td> <td> $row[Appointment]</td></tr> </br>
                                        <tr><td> DEPARTMENT: </td><td>$row[Department] </td></td></a></tr>
                                        <tr> </br>
                                        <tr><td> INSURANCE NAME: </td><td>$row[Insurance_Name] </td></td></a></tr>
                                        <tr><td> INSURANCE ID: </td><td>$row[Insurance_ID] </td></td></a></tr>
                                        <tr><td> DOCTOR:</td> <td> $row[Doctor]</td></tr> </br>
                                        <tr><td> TIME:</td> <td> $row[ApTime]</td></tr> </br>
                                        <tr><td> BOOKING REASON: </td><td>$row[Reason] </td></td></a></tr>
                                        <tr><td> STATUS: Booked </td><td> </td></td></tr>
                                    ";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "record not found";
                        }

                     }
                                 
                    mysqli_close($conn);
               ?>
</div>
</body>
</html>
