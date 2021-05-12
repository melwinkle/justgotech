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





$patient=$row['PatientID'];


	$notif="SELECT * from notification where PatientID=$patient and NRead='Unread'";
	$noq=mysqli_query($conn,$notif);
	if(mysqli_num_rows($noq)>0){
	  $nn=mysqli_num_rows($noq);
	 
	}else{
	  $nn=0;
	}

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="css/covid.css">
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="./num.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/cov.php">Virtual Screening</a>
  <a href="../booking2/bookmain.php">Consultation</a>
  <a href="../pharmacy/pharmacy_main.php">Pharmacy</a>
 
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
  <div style="float:right">
 
  <div class="dropdown" style="margin-left:59%">
  <button onclick="myFunction()" class="dropbtn" style="background:none;border:none;"><img style="width:25%"src="https://img.icons8.com/plasticine/100/000000/appointment-reminders.png"/><img style="width:10%"src="https://img.icons8.com/ios-filled/50/e74c3c/<?php echo $nn;?>-circle.png"/></button>
  <div id="myDropdown" class="dropdown-content">
    <?php
    if($nn>0){
     while($num=mysqli_fetch_assoc($noq)){
       $nt=$num['NID'];
       $mes=$num['NMessage'];
       $da=$num['NTime'];
       echo "<a href='../pharmacy/ph_suc.php?not&id=$nt&mprev=../pharmacy/ph_records.php'>$mes $da</a>";
     }
    }else{
      echo "<a >No Unread Notifications</a>";
    }
     ?>
   
  </div>
</div>
<span style="font-size:20px;cursor:pointer;margin-left:-7% " onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:5%" src="../../images/stethoscope.png" alt="profile"> </span>

</div>

<div class= 'page' style="background=rgb(23, 79, 182);margin-left:20%;">
<div class="hname" style="margin-left:30%;color:rgb(23, 79, 182)">
<h1>BOOKING DETAILS</h1>
</div>
    <div id="table" class="table-editable" style="width:1100px;margin-top:2%;background:white">
            <table id="example"class="table table-bordered table-responsive-md ">
            <thead>
                <tr>
                <th scope="col">BOOKING ID</th>
                <th scope="col">APPOINTMENT DATE</th>
                <th scope="col">DEPARTMENT</th>
                <th scope="col">INSURANCE</th>

                <th scope="col">DOCTOR</th>
                <th scope="col">TIME</th>
                <th scope="col">BOOKING REASON</th>
                <th scope="col">STATUS</th>
                <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <!-- $row[BID] -->
            <tbody>
            <?php
               
                    $sql = "SELECT * FROM booking inner join Doctor on booking.Doctor=Doctor.DocID where PatientID=$patient";
                    $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            //associative array
                            while ($row = mysqli_fetch_assoc($result)){
                              if($row['Insurance']=="Yes"){
                                $in=$row['Insurance_Name'];
                              }else{
                                $in="None";
                              }

                              if($row['STATUS']=="COMPLETED"){
                                echo '<tr class="table-success">';
                                $te='<a href="../booking2/pres.php?rid='.$row['BID'].'"class="btn btn-primary">DIAGNOSIS</a>';

                              }
                              else if($row['STATUS']=="PENDING"){
                                echo '<tr class="table-danger">';
                                $te='<a class="btn btn-primary">PENDING</a>';

                              }else{
                                echo '<tr class="table-warning">';
                              }
                                
                                ?>
                                            <td><?php echo $row["BID"]?></td>
                                         <td><?php echo $row["Appointment"]?></td>
                                        <td><?php echo $row['Department']?> </td>
                                        
                                      <td><?php echo $in?> </td>
                                 
                                         <td><?php echo $row['DocFname'].' '.$row['DocLname']?></td>
                                        <td><?php echo $row['ApTime']?></td>
                                        <td><?php echo $row['Reason'] ?></td>
                                        <td><?php echo $row['STATUS']?> </td>
                                        <td><?php echo $te;?></td>
                            </tr>
                              <?php
                            }
                         
                        }
                        else{
                          echo "<tr class='table-danger'>
                          <td colspan=8> No Bookings Made</td>
                          </tr>";
                        }

                     
                                 
                
               ?>
               </tbody>
                      </table>
                      </div>
</div>



<script>
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "75px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>

<script type="text/javascript">function add_chatinline(){var hccid=33480640;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline();</script>
</body>
</html>
