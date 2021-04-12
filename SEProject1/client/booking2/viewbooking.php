<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Details</title>
</head>
<body>
  
<img src="./img/background.jpg" width="1000" height="500">

    <h2 style ='align=center'> Your Booking Details</h2> 

            <?php
                // Include database file
                require_once('../../database/connection.php'); 
                    
                    $sql = "SELECT * FROM booking";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            //associative array
                            while ($row = mysqli_fetch_assoc($result)){
                                echo "<table>";
                            echo " <td  bgcolor = '#8080ff' ><td><a href = bookingverify.php?id=$row[BID]></br></td>
                                        <tr>
                                         <td>Appointment Date:</td> <td> $row[Appointment]</td></tr> </br>
                                         <tr><td> Department: </td><td>$row[Department] </td></td></a></tr>
                                         <tr>
                                         <td>Reason: </td> <td> $row[Reason]</td></tr> </br>
                                         <tr><td> Insurance: </td><td>$row[Insurance_Name] </td></td></a></tr>
                                         <tr>
                                         <td>Insurance Name:</td> <td> $row[Appointment]</td></tr> </br>
                                         <tr><td> Insurance ID: </td><td>$row[Insurance_ID] </td></td></a></tr>

                                         <td>Doctor:</td> <td> $row[Doctor]</td></tr> </br>
                                         <tr><td> Booking Reason: </td><td>$row[Reason] </td></td></a></tr>

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
</body>
</html>
