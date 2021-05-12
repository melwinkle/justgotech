<!-- Home page for covid testing -->
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

$query1="SELECT * from covid ";
$results=mysqli_query($conn,$query1);


$query2="SELECT * from testing_centre";
$resultss=mysqli_query($conn,$query2);


?>
<html>
<head>
<title>COVID-19</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="covid.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body >

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../../images/justgotech.png" alt="justgotech">
  <a href="../../account/accountinfo.php">Account Info</a>
  <a href="../../tracker/tracker.php">Tracker</a>
  <a href="../../screening/cov.php">Virtual Screening</a>
<a href="../booking2/bookmain.php">Consultation</a>
<a href="../../pharmacy/pharmacy_main.php">Pharmacy</a>

 
  <a href="../../account/logout.php">Log Out</a>
</div>

<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../../images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>
   
<div   style="margin-top:30px;margin-left:20%;margin-bottom: 20px">
<button class="main" onclick="mainP()" style="width:40%;background:rgb(23, 79, 140);height:300px;border-radius:10px;border:3px black;color:white;font-size:24pt">
COVID TEST
</button>
<button class="purchase" onclick="purP()" style="margin-left:3%;width:40%;background:rgb(23, 79, 110);height:300px;border-radius:10px;border:3px black;color:white;font-size:24pt">
MALARIA TEST
</button>
<button class="purchase" onclick="presP()" style="margin-top:3%;margin-left:15%;width:40%;background:rgb(23, 79, 110);height:300px;border-radius:10px;border:3px black;color:white;font-size:24pt">
TEST RESULTS
</button>

 </div>
 
 
 </div>
<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "75px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function mainP() {
  window.location.href="../covid/covid.php"
}

function purP() {
  window.location.href="../malaria/covid.php"
}

function presP() {
  window.location.href="../results.php"
}

</script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
   <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> 
</footer>
</html>