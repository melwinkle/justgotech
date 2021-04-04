<!-- Screening page for covid testing -->
<?php
require_once("../../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../../account/logout.php'</script>";
}

$username=$_SESSION['username'];

$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>


<html>
<head>
<title>COVID-19</title>
</head>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="covid.css">

<body >
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../../images/justgotech.png" alt="justgotech">
  <a href="../../account/accountinfo.php">Account Info</a>
  <a href="../..//tracker/tracker.php">Tracker</a>
  <a href="../../screening/covid/covid.php">Virtual Screening</a>
  <a href="../../booking/Userbooking.php">Consultation</a>

  <a href="../../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../../images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>

    <div class="covidinfo">
  
  <h5 class="card-header">
  <a href="covid.php" style="color:white">BACK</a>
  <img src="../../../images/patient.png" alt="patient">
  </h5>
  <div class="card-body">

    <h2 class="card-title">
    COVID-19 SCREENING TOOL 
    </h2><br>
    <p> This is a tool to evaluate your symptoms and predict a likely status.</p>
<p>Your information will not be shared without your permission</p><br>
    <br>
    <a href="covidver.php?person=self" class="btn btn-primary btn-lg" style="background: white; color:rgb(23, 79, 182);margin-bottom: 5px">Use for self</a><br>
    <a href="covidver.php?person=other" class="btn btn-primary btn-lg" style="background: white; color:rgb(23, 79, 182)">Use for someone else</a>
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
</html>