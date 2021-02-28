<!-- Screening page for covid testing -->
<?php
error_reporting(0);

require_once("../../database/connection.php");

session_start();

$username=$_SESSION['username'];
if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../../account/logout.php'</script>";
}

$username=$_SESSION['username'];
$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

$patient=$row['PatientID'];
$quey="SELECT * from diseases inner join contact on diseases.ConID= contact.ConID where PatientID=$patient";
$resut=mysqli_query($conn,$quey);




?>
<html>
<head>
<title>COVID-19</title>
</head>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="covid.css">

<body >
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/covid/covid.php">Virtual Screening</a>
  <a href="../booking/Userbooking.php">Consultation</a>

 
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="../../images/stethoscope.png" alt="profile"> </span>

</div>

       <?php
       while($rw=mysqli_fetch_assoc($resut)){
        $con=$rw['ConID'];

       
       echo '
       <div class="res" style="margin-bottom:2%">
<div class="covidinf" >
   
   <h5 class="card-header">
       Response ID: #
   '.$rw['ResponseID'].'
   <div class="card-body" >
 
     <h2 class="card-title">
     Your Responses
     </h2><br>
     <p>Age: '.$rw['age_bracket'].'</p><br>
     <p>Region:'.$rw['Region'].'</p><br>
     <p>Test Status:'.$rw['testing'].'</p><br>
     <p>Symptoms:'.$rw['symptom'].'</p><br>
     <p>Preconditions:'.$rw['precon'].'</p><br>
     <p>Health Status:'.$rw['Status'].'</p><br>
     <p>Time Completed:'.$rw['Time'].'</p><br>
     <p>Contact Status:'.$rw['Contact'].'</p><br>
       </div>
       </div><br>
     ';
       }
       
     
     ?>
  

     
  
    
     
  
   </div>
</div>


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
<footer >
  Copyright (c) JustGoTech 2021 
</footer>
</body>

</html>