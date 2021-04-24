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
<title>Pharmacy</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="pharm.css">
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
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="../../images/stethoscope.png" alt="profile"> </span>

</div>

<div class="opt" style="margin-bottom: 20px">
<button class="main" onclick="mainP()" style="height:30%">
    <div class="main_img">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" height="500" viewBox="0 0 959 615">
         <defs>
     <linearGradient id="linear-gradient" x2="1" y2="0.517" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#3e4ccb"/>
      <stop offset="1" stop-color="#289697"/>
     </linearGradient>
         </defs>
        <g id="Group_23" data-name="Group 23" transform="translate(-203 -185)">
     <g id="Rectangle_13" data-name="Rectangle 13" transform="translate(203 185)" stroke="#b720e5" stroke-width="5" fill="url(#linear-gradient)">
      <rect width="959" height="615" rx="15" stroke="none"/>
      <rect x="2.5" y="2.5" width="954" height="610" rx="12.5" fill="none"/>
     </g>
     <text id="MAIN_STORE" data-name="MAIN STORE" transform="translate(254 518)" fill="#fff" font-size="70" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="0" y="0">MAIN STORE</tspan></text>
     <path id="Icon_awesome-shopping-cart" data-name="Icon awesome-shopping-cart" d="M307.746,158.293,335.293,49.024c1.989-7.889-4.663-15.4-13.637-15.4H92.774l-5.341-23.54C86.1,4.214,80.375,0,73.731,0H13.985C6.261,0,0,5.645,0,12.608v8.405c0,6.963,6.261,12.608,13.985,12.608H54.707L95.642,214.039c-9.793,5.077-16.392,14.6-16.392,25.513,0,16.248,14.61,29.419,32.632,29.419s32.632-13.171,32.632-29.419a27.993,27.993,0,0,0-9.8-21.013H256.876a27.994,27.994,0,0,0-9.8,21.013c0,16.248,14.61,29.419,32.632,29.419s32.632-13.171,32.632-29.419c0-11.648-7.51-21.713-18.4-26.479l3.215-12.753c1.989-7.889-4.663-15.4-13.637-15.4H127.1l-3.814-16.811H294.109C300.639,168.107,306.3,164.033,307.746,158.293Z" transform="translate(729.947 356.015)" fill="#fdfafa"/>
         </g>
        </svg>
</div>
</button>
<button class="purchase" onclick="purP()" style="height:30%">
    <div class="main_img">
    <svg id="Component_4_2" data-name="Component 4 – 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" height="500" viewBox="0 0 959 615">
  <defs>
    <linearGradient id="linear-gradient" x2="1" y2="0.517" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#3e4ccb"/>
      <stop offset="1" stop-color="#289697"/>
    </linearGradient>
  </defs>
  <g id="Rectangle_13" data-name="Rectangle 13" stroke="#b720e5" stroke-width="5" fill="url(#linear-gradient)">
    <rect width="959" height="615" rx="15" stroke="none"/>
    <rect x="2.5" y="2.5" width="954" height="610" rx="12.5" fill="none"/>
  </g>
  <text id="PURCHASES" transform="translate(142 335)" fill="#fff" font-size="70" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="0" y="0">PURCHASES</tspan></text>
  <path id="Icon_material-attach-money" data-name="Icon material-attach-money" d="M93.248,83.166C58.548,77.291,47.39,71.216,47.39,61.757c0-10.854,15.439-18.422,41.272-18.422,27.209,0,37.3,8.464,38.215,20.911H160.66c-1.07-17.127-17.12-32.86-49.068-37.939V4.5H65.733V26.009c-29.655,4.182-53.5,16.729-53.5,35.947,0,23,29.2,34.454,71.845,41.125,38.215,5.975,45.858,14.737,45.858,24,0,6.871-7.49,17.824-41.272,17.824-31.489,0-43.871-9.161-45.553-20.911H9.48c1.834,21.807,26.9,34.055,56.253,38.138v21.608h45.858V162.329c29.808-3.684,53.5-14.936,53.5-35.35C165.093,98.7,127.947,89.041,93.248,83.166Z" transform="translate(650.52 213.381)" fill="#faf5f5"/>
</svg>
</div>
</button>



</div>
<div style="margin-left:40%;margin-top: 85px;">
  <button onclick="track()"style="width:55%;background:skyblue;height:300px">TRACK ORDERS</buttom>
</div>

   
<div class="imgchat" style="margin-left:85%;position:fixed">
<a href="../chatbot/bot.php?prev=../pharmacy/pharmacy_main.php"><img style="width:30%;margin-top:60%;margin-left:40%" src="../images/chat.png" alt="chatbot"></a>

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
    window.location.href ="../pharmacy/ph_store.php";
}
function purP() {
    window.location.href ="../pharmacy/ph_records.php";
}
function track() {
    window.location.href ="../pharmacy/ph_pay.php";
}
</script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
  <div>Icons made by <a href="https://icon54.com/" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</footer>
</html>