<!-- Home page for covid testing -->
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

$num="SELECT *,count(*) as c from diseases where PatientID=$patient";
$resnum=mysqli_query($conn,$num);

$book="SELECT *,count(*) as b from booking where PatientID=$patient";
$resbook=mysqli_query($conn,$book);
$rowbook=mysqli_fetch_assoc($resbook);

$dise="SELECT * from diseases where PatientID=$patient";
$redise=mysqli_query($conn,$dise);
$rowdise=mysqli_fetch_assoc($redise);


$count=0;
$countp=0;
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
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/covid/covid.php">Virtual Screening</a>
  <a href="../booking2/booking.php">Consultation</a>
  <a href="../pharmacy/pharmacy_main.php">Pharmacy</a>

 
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
 
  <div style="float:right">
  <button style="background:none;border:none;margin-left:68%"><img src="https://img.icons8.com/metro/26/000000/filled-message.png"/></button>
  <button style="background:none;border:none;margin-left:-8%"><img style="width:25%"src="https://img.icons8.com/plasticine/100/000000/appointment-reminders.png"/><img style="width:10%"src="https://img.icons8.com/ios-filled/50/e74c3c/2-circle.png"/></button>
 <span style="font-size:20px;cursor:pointer;margin-left:-5% " onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:5%" src="../../images/stethoscope.png" alt="profile"> </span>
 
 </div>
</div>


   
<div class="test" >
  <h5 class="card-header"></h5>
  <div class="card-body" style="background:#ff9900;height:90%">
  
    <h2 class="card-title">
    VIRTUAL SCREENING TESTS
    </h2><br>
    <ul>
    <?php 
        while($rownum=mysqli_fetch_assoc($resnum)){

          ?>
        <h4>TOTAL NUMBER OF TESTS: <?php echo $rownum['c']?></h4>
  
       
        <h4> NO EXPOSURE:<?php 
        
          if($rownum['Status']=="Not exposed"||$rownum['Status']=="Not Likely Exposed"){
            $count=$count +1;
            $e=($count/$rownum['c'])*100;
            echo $e."%";
              }
              else{
                  echo "0%";
  
              }
        
        
           
            
           
            ?> </h4>
      
  
        <h4>EXPOSURE:<?php 

        if($rownum['Status']=="Exposed"||$rownum['Status']=="Likely Exposed"){
            $countp=$countp +1;
            $c=($countp/$rownum['c'])*100;
            echo $c."%";
            }
            else{
                echo "0%";
            }
          }
            ?> </h4>
    
    </ul>
   <br>


<br>
    <a href="../screening/results.php" class="btn btn-primary btn-lg" style="background: white; color:rgb(23, 79, 182)">View all</a>
  </div>
</div>


<div class="test">
  <h5 class="card-header"></h5>
  <div class="card-body" style="background:skyblue;height:90%">
  
    <h2 class="card-title">
    BOOKING INFORMATION
    </h2><br>
<h4>TOTAL NUMBER OF BOOKINGS: <?php
    
    echo $rowbook['b'];
    ?></h4>

    

    
<br>
    <a href="../booking2/viewbooking.php" class="btn btn-primary btn-lg" style="background: white; color:rgb(23, 79, 182)">View all</a>
  </div>
</div>


<div class="imgchat" style="margin-left:85%;position:fixed">
<a href="../chatbot/bot.php?prev=../tracker/tracker.php"><img style="width:30%;margin-top:-150%;margin-left:40%" src="../images/chat.png" alt="chatbot"></a>

</div>

<div class="test">
  <h5 class="card-header"></h5>
  <div class="card-body" style="background:pink;height:90%">
  
    <h2 class="card-title">
    ONLINE PHARMACY
    </h2><br>
    
    <h4>UPDATED SOON</h4>
<br>
    <a href="../pharmacy/pharmacy_main.php" class="btn btn-primary btn-lg" style="background: white; color:rgb(23, 79, 182)">View all</a>
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
</script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
  <div>Icons made by <a href="https://icon54.com/" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</footer>
</html>