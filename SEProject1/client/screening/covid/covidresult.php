<!-- Screening page for covid testing -->
<?php
require_once("/Applications/XAMPP/xamppfiles/htdocs/justgotech/SEProject1/database/database.php");
session_start(); 


if(isset($_GET["person"])){
  $person=$_GET["person"];
}
if(isset($_GET["ageb"])){
  $age=$_GET["ageb"];
}
  if(isset($_GET["test"])){
    $test=$_GET["test"];
}
if(isset($_GET["sym"])){
  $sym=$_GET["sym"];
}
if(isset($_GET["pre"])){
  $pre=$_GET["pre"];
}
if(isset($_GET["con"])){
  $con=$_GET["con"];
}
if(isset($_GET["reg"])){
  $reg=$_GET["reg"];
}


$date=date('Y-m-d H:i:s'); 
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
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="/justgotech/SEProject1/images/justgotech.png" alt="justgotech">
  <a href="#">Account Info</a>
  <a href="#">Tracker</a>
  <a href="covid.php">Virtual Screening</a>
  <a href="consultation.php">Consultation</a>


  <a href="logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="/justgotech/SEProject1/images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()">User Name<img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>

<div class="res">
<div class="covidinf" >
   
   <h5 class="card-header">
   <?php
   echo "<a href='covidarea.php?person=$person&ageb=$age&test=$test&sym=$sym&pre=$pre&con=$con&reg=$reg' style='color:white'>BACK</a>"?>
   </h5>
   <div class="card-body" >
 
     <h2 class="card-title">
     Your Responses
     </h2><br>
     <p>Person Status:<?php echo $person?></p><br>
     <p>Age:<?php echo $age?></p><br>
     <p>Region:<?php echo $reg?></p><br>
     <p>Test Status:<?php echo $test?></p><br>
     <p>Symptoms:<?php echo $sym?></p><br>
     <p>Preconditions:<?php echo $pre?></p><br>
     <p>Contact Status:<?php echo $con?></p><br>

     
     
     
     
  
   </div>

</div>



   <div class="covidin" style="float:left">
   
   <h5 class="card-header">
   
   </h5>
   <div class="card-body" >
 
     <h2 class="card-title">
     COVID-19 SCREENING TOOL 
     </h2><br>
     <p> No Testing Required!
     Based your results, you do not need testing. However do not forget to mask up.</p>
     
     <div>
     <a href="covid_print.php" style="color:white"><i class='icon ion-md-home' size='large'></i>Print</a>
     <?php
     echo "<a href='covid_restart.php?person=$person&ageb=$age&test=$test&sym=$sym&pre=$pre&con=$con&reg=$reg&date=$date' style='color:white'>Done</a>";?>
     </div>
    
     
  
   </div>
</div>
<div class="com" style="margin-top:-12%;margin-left: 67%">
  Completed <?php  echo $date; ?>
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

</body>
</html>v