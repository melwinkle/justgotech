<!-- Screening page for covid testing -->
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
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="/justgotech/SEProject1/images/justgotech.png" alt="justgotech">
  <a href="account.php">Account Info</a>
  <a href="tracker.php">Tracker</a>
  <a href="covid.php">Virtual Screening</a>
  <a href="consultation.php">Consultation</a>


  <a href="logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="/justgotech/SEProject1/images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()">User Name<img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>

    <div class="covidinfo">
  
  <h5 class="card-header">
  <a href="covid.php" style="color:white">BACK</a>
  <img src="/justgotech/SEProject1/images/patient.png" alt="patient">
  </h5>
  <div class="card-body">

    <h2 class="card-title">
    COVID-19 SCREENING TOOL 
    </h2><br>
    <p> This is a tool to evaluate your symptoms and predict a likely status.</p>
<p>Your information will not be shared without your permission</p><br>
    <br>
    <a href="covidver.php?self" class="btn btn-primary btn-lg" style="background: white; color:rgb(23, 79, 182);margin-bottom: 5px">Use for self</a><br>
    <a href="covidver.php?other" class="btn btn-primary btn-lg" style="background: white; color:rgb(23, 79, 182)">Use for someone else</a>
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