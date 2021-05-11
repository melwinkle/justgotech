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
  <a href="../../screening/covid/cov.php">Virtual Screening</a>
<a href="../booking2/bookmain.php">Consultation</a>

<a href="../../pharmacy/pharmacy_main.php">Pharmacy</a>
 
  <a href="../../account/logout.php">Log Out</a>
</div>

<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../../images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>
   
  <div class="covid">
  <h5 class="card-header"></h5>
  <div class="card-body">
  <img src="../../../images/doctor.png" alt="doctor">
    <h2 class="card-title">
    COVID-19 SCREENING TOOL 
    </h2><br>
    <p> This tool is designed to help evaluate your symptoms and determine if you need further assistance. <br>
    Do not forget to mask up and social distance.</p>
<br>
    <a href="covid_form.php" class="btn btn-primary btn-lg" style="background: white; color:rgb(23, 79, 182)">Start Screening</a>
  </div>
</div>


<div class="container">
  <div class="row">
  <div class="column" onclick="openTab('b1');" >
  <img style="width:50px"src="../../../images/car.png" alt="hospital">
  <h6>About Covid-19 <br>
  Up-to-date information about the Coronavirus</h6> 
  </div>
  <div class="column" onclick="openTab('b2');" >
  <img style="width:50px" src="../../../images/hospital.png" alt="hospital">
    <h6>Testing Centres <br>
    List of all available Covid-19 testing centres in Ghana</h6> 
  </div>
    <div class="w-100"></div>
    <div class="column" onclick="openTab('b3');">
  <img style="width:50px" src="../../../images/placeholder.png" alt="globe">
   <h6> World Stats <br>
  Current Covid-19 world statistics </h6> 
  </div>
  <div class="column" onclick="openTab('b3');">
  <img style="width:50px" src="../../../images/globe.png" alt="globe">
  <h6>Support</h6> 
  </div>
  </div>
</div>



<div id="b1" class="containerTab" style="display:none;background:skyblue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>
  About Covid-19
</h2>
  <p> <?php
      while($row1=mysqli_fetch_assoc($results)){
        echo "{$row1['disease_desc']}";
      }
      ?>
  </p>
</div>

<div id="b2" class="containerTab" style="display:none;background:skyblue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>
   
    Testing Centres</h2>
  <p>
    <ul>
      <?php
      while($row2=mysqli_fetch_assoc($resultss)){
        echo "<li>{$row2['CName']}</li>";
      }
      ?>
          
    </ul>
  </p>
</div>

<div id="b3" class="containerTab" style="display:none;background:skyblue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <p>World Statistics</p>
  Total Cases:113,982,329 <br>
  Total Deaths: 2,528,948<br>
<p></p>
  <p>Ghana Statistics</p> 
  Total Cases: 84,023<br>
  Active Cases: 5,444<br>
  Total Deaths: 607<br>
</div>



<div>
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
</script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
   <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> 
</footer>
</html>