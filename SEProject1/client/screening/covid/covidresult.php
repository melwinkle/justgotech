<!-- Screening page for covid testing -->
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
   <a href="covidarea.php" style="color:white">BACK</a>
   </h5>
   <div class="card-body" >
 
     <h2 class="card-title">
     Your Responses
     </h2><br>
     <p>Age:</p><br>
     <p>Age:</p><br>
     <p>Age:</p><br>
     <p>Age:</p><br>
     <p>Age:</p><br>
     <p>Age:</p><br>
     <p>Age:</p><br>
     <p>Age:</p><br>
     <p>Age:</p>
     
     
     
  
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
     <a href="covidarea.php" style="color:white"><i class='icon ion-md-home' size='large'></i>Print</a>
     <a href="covid.php" style="color:white">Done</a>
     </div>
    
     
  
   </div>
</div>
<div class="com" style="margin-top:-12%;margin-left: 67%">
  Completed 23rd February, 2021.
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