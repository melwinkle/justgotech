<?php
error_reporting(0);
require_once("../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../account/logout.php'</script>";
}

$username=$_SESSION['username'];

$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);



$PatientID=$row['PatientID'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Details</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="css/covid.css">
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/covid/covid.php">Virtual Screening</a>
  <a href="../booking2/booking.php">Consultation</a>

 
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="../../images/stethoscope.png" alt="profile"> </span>

</div>

<div class= 'page' style="background=rgb(23, 79, 182);margin-left:30%;color:white">
    <h2 style="color:black" > Your Booking Details</h2> 
            <?php
               
                    $sql = "SELECT * FROM booking where PatientID=$PatientID";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            //associative array
                            while ($row = mysqli_fetch_assoc($result)){
                                echo "<table  style='background:#8080ff;width:50%'>";
                                echo " <td  bgcolor ='#8080ff' ><td><a href = bookingverify.php?id=$row[BID]></br></td>
                                            <tr>
                                        <td>APPOINTMENT DATE:</td> <td> $row[Appointment]</td></tr> </br>
                                        <tr><td> DEPARTMENT: </td><td>$row[Department] </td></td></a></tr>
                                        <tr> </br>
                                        <tr><td> INSURANCE NAME: </td><td>$row[Insurance_Name] </td></td></a></tr>
                                        <tr><td> INSURANCE ID: </td><td>$row[Insurance_ID] </td></td></a></tr>
                                        <tr><td> DOCTOR:</td> <td> $row[Doctor]</td></tr> </br>
                                        <tr><td> TIME:</td> <td> $row[ApTime]</td></tr> </br>
                                        <tr><td> BOOKING REASON: </td><td>$row[Reason] </td></td></a></tr>
                                        <tr><td> STATUS:$row[STATUS] </td><td> </td></td></tr>
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



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "75px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>
