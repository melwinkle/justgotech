<!-- Screening page for covid testing -->
<?php

require_once("../../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../account/logout.php'</script>";
}

$username=$_SESSION['username'];

$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

$patient=$row['PatientID'];

$rid=$_GET['rid'];

$des="SELECT * FROM diseases where PatientID=$patient and ResponseID=$rid";
$deq=mysqli_query($conn,$des);
$der=mysqli_fetch_assoc($deq);

$person=$der['Person'];
$age=$der['age_bracket'];
$sym=$der['symptom'];
$test=$der['testing'];
$pre=$der['precon'];
$reg=$der['Region'];
$con=$der['ConID'];
$status=$der['Status'];
$time=$der['Time'];
$probability=$_GET['prob'];


$cr="SELECT * from contact where ConID=$con";
$conresult=mysqli_query($conn,$cr);
$conrow=mysqli_fetch_assoc($conresult);
$conr=$conrow['Contact'];

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
  <a href="/justgotech/SEProject1/client/account/accountinfo.php">Account Info</a>
  <a href="/justgotech/SEProject1/client/tracker/tracker.php">Tracker</a>
  <a href="/justgotech/SEProject1/client/screening/covid/covid.php">Virtual Screening</a>
  <a href="../booking2/bookmain.php">Consultation</a>

 
  <a href="/justgotech/SEProject1/client/account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="/justgotech/SEProject1/images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>

<div class="res">
<div class="covidinf" >
   
   <h5 class="card-header">
  
   
   </h5>
   <div class="card-body" >
 
     <h2 class="card-title">
     Your Responses
     </h2><br>
     <p>Completed:<?php echo $time?></p><br>
     <p>Person Status:<?php echo $person?></p><br>
     <p>Age:<?php echo $age?></p><br>
     <p>Region:<?php echo $reg?></p><br>
     <p>Test Status:<?php echo $test?></p><br>
     <p>Symptoms:<?php echo $sym?></p><br>
     <p>Preconditions:<?php echo $pre?></p><br>
     <p>Contact Status:<?php echo $conr?></p><br>
     <p>Status:<?php echo $status?></p><br>
     

     
     
     
     
  
   </div>

</div>



   
     <?php 
     if($probability<11){
      echo "<div class='covidin' style='float:left;background:green;>
   
      <h5 class='card-header'>
      
      </h5>
      <div class='card-body' >
    
        <h2 class='card-title'>
        COVID-19 SCREENING TOOL 
        </h2><br>
      <p> No Testing Required!
      Based your results, you do not need testing. However do not forget to mask up and follow all the protocols.</p>";

     
     }
     else if ($probability>=11 & $probability <=40){
      echo "<div class='covidin' style='float:left;background:#ffcc00'>
   
      <h5 class='card-header'>
      
      </h5>
      <div class='card-body' >
    
        <h2 class='card-title'>
        COVID-19 SCREENING TOOL 
        </h2><br>
      <p> You may have been exposed to COVID-19. However no emergency COVID-19 Testing Required!
      Please go and get checked for a flu. If however, the symptoms continue to persist, here is a link to all testing centres.
      <a href='covid.php'>testing centres</a>
      However do not forget to mask up and follow all the protocols.</p>";


     }
     else if ($probability>=41 & $probability <=60){
      echo "
      <div class='covidin' style='float:left;background:orange'>
   
   <h5 class='card-header'>
   
   </h5>
   <div class='card-body' >
 
     <h2 class='card-title'>
     COVID-19 SCREENING TOOL 
     </h2><br>
      <p> There is a "; echo $probability; echo "% that you may have been exposed to COVID-19. After 2 days, if the symptoms persist,
      please go and get tested. Here is a link to all <a href='testingcentres.php'>testing centres</a>
      However do not forget to mask up and follow all the protocols. STAY SAFE!!</p>";


     }

     else {
      echo "
      <div class='covidin' style='float:left;background:tomato'>
   
   <h5 class='card-header'>
   
   </h5>
   <div class='card-body' >
 
     <h2 class='card-title'>
     COVID-19 SCREENING TOOL 
     </h2><br>
      <p> There is a "; echo $probability; echo "% that you may have been exposed to COVID-19. Please go and get tested immediately. 
      Here is a link to all <a href='testingcentres.php'>testing centres</a>
      Do not forget to mask up and follow all the protocols. STAY SAFE!!</p>";

  
     }
       ?>

     
     <div>
     <a href="../results.php" style="color:white;font-size:20px"><i class='icon ion-md-home' size='large'></i>Done</a>
    
     </div>
    
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