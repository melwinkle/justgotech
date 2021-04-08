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

$probability=0.0;
$score=0;
if(isset($_GET["person"])){
  $person=$_GET["person"];
}
if(isset($_GET["ageb"])){
  $age=$_GET["ageb"];
  if(($age=='Between 56-64')|| $age==('More than 64')){
    $score=$score+2;
  }else{
    $score=$score+1;
  }
}
  if(isset($_GET["test"])){
    $test=$_GET["test"];
    if( $test==('Tested but result was positive')){
      $score=$score+2;
    }
    else if( $test==('Tested but result was negative')||$test==('Tested and awaiting results')){
      $score=$score+1;
    }
    else{
      $score=$score+0;
    }
}

if(isset($_GET["sym"])){
  $sym=$_GET["sym"];
  if($sym=='None of the above'){
    $score=$score+0;
  }else{
    $score=$score+2;
  }
}

if(isset($_GET["pre"])){
  $pre=$_GET["pre"];
  if($pre=='None of the above'){
    $score=$score+0;
  }else{
    $score=$score+2;
  }
}

if(isset($_GET["con"])){
  $con=$_GET["con"];
  if($con=='I have no exposure of Covid-19'){
    $score=$score+0;
  }else{
    $score=$score+2;
  }
}

if(isset($_GET["reg"])){
  $reg=$_GET["reg"];
}

$probability=($score/10)*100;

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
  <a href="/justgotech/SEProject1/client/account/accountinfo.php">Account Info</a>
  <a href="/justgotech/SEProject1/client/tracker/tracker.php">Tracker</a>
  <a href="/justgotech/SEProject1/client/screening/covid/covid.php">Virtual Screening</a>
  <a href="../booking2/booking.php">Consultation</a>

 
  <a href="/justgotech/SEProject1/client/account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="/justgotech/SEProject1/images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

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

      $status="Not exposed";
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

      $status="Not likely exposed";
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

      $status="Likely exposed";
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

      $status="Exposed";
     }
       ?>

     
     <div>
     <a href="covid_print.php" style="color:white"><i class='icon ion-md-home' size='large'></i>Print</a>
     <?php
     echo "<a href='covid_restart.php?person=$person&ageb=$age&test=$test&sym=$sym&pre=$pre&con=$con&reg=$reg&date=$date&status=$status' style='color:white'>Done</a>";?>
     </div>
    
  </div>
</div>
<div class="com" style="margin-top:-25%;margin-left: 67%">
  <h5>Completed <?php  echo $date; ?></h5>
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