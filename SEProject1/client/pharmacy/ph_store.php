<!-- Page for shopping for drugs -->

<?php
session_start();

require_once("../../database/connection.php");

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



  if(isset($_GET['success'])|| isset($_GET['failure'])){
    $drug=$_GET['drug'];
    $location=$_GET['location'];



    $sql_ph="SELECT * FROM pharm_drugs inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID inner join drugs  on pharm_drugs.DID = drugs.DID where drugs.Queries LIKE '%$drug%' and pharmacists.Location_queries LIKE '%$location%'";
    $pharm=mysqli_query($conn,$sql_ph);
   
}

$count="SELECT count(*) as total from temp_cart where PatientID=$patient and status='Basket'";
$conph=mysqli_query($conn,$count);
$cout=mysqli_fetch_assoc($conph);
$cart=$cout['total'];


$notif="SELECT * from notification where PatientID=$patient and NRead='Unread'";
$noq=mysqli_query($conn,$notif);
if(mysqli_num_rows($noq)>0){
  $nn=mysqli_num_rows($noq);
 
}else{
  $nn=0;
}
?>


<!DOCTYPE html>
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
<link rel="stylesheet" href="num.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>


<body >

  <div id="mySidenav" class="sidenav">
  <a href="../pharmacy/pharmacy_main.php"><img src="https://img.icons8.com/material-sharp/24/000000/long-arrow-left.png"/>BACK</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/covid/covid.php">Virtual Screening</a>
  <a href="../booking2/bookmain.php">Consultation</a>
  <a href="../pharmacy/pharmacy_main.php">Pharmacy</a>

 
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
  <div style="float:right">
 
  <div class="dropdown" style="margin-left:61%">
  <button onclick="myFunction()" class="dropbtn" style="background:none;border:none;"><img style="width:25%"src="https://img.icons8.com/plasticine/100/000000/appointment-reminders.png"/><img style="width:10%"src="https://img.icons8.com/ios-filled/50/e74c3c/<?php echo $nn;?>-circle.png"/></button>
  <div id="myDropdown" class="dropdown-content">
    <?php
    if($nn>0){
     while($num=mysqli_fetch_assoc($noq)){
       $nt=$num['NID'];
       $mes=$num['NMessage'];
       $da=$num['NTime'];
       echo "<a href='../pharmacy/ph_suc.php?not&id=$nt&mprev=../pharmacy/ph_store.php'>$mes $da</a>";
     }
    }else{
      echo "<a >No Unread Notifications</a>";
    }
     ?>
   
  </div>
</div>
 

  <button onclick="cartP()"style="background:none;border:none;margin-left:-9%"><img  style="width:30%" src="https://img.icons8.com/fluent/48/4a90e2/fast-cart.png"/><img style="width:20%"src="https://img.icons8.com/ios-filled/50/000000/<?php echo $cart;?>-circle.png"/></button>
  <span style="font-size:20px;cursor:pointer;margin-left:-2% " onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:5%" src="../../images/stethoscope.png" alt="profile"> </span>

  </div>
  
</div>

<div class="hname" style="margin-left:45%;color:rgb(23, 79, 182)">

<h1>PHARMACY</h1>





</div>


<div class="store">
    
    <div class="card-body" style="border:2px solid blue;width:80%;">
    <form class="fsearch" action="ph_info.php" method="post" style="margin-left:20px">
        <input type="text" name="drug" id="drug" placeholder="  Drug eg.Paracetamol" value="<?php if(isset($drug)){ echo $drug;} else{echo "";}?>"style="width:48%;height:6%;" >
        <input type="text" name="location" id="location" placeholder="  Location eg.Osu" value="<?php if(isset($location)){ echo $location;} else{echo "";}?>" style="margin-left:40px;width:45%;height:6%;" ><br>


        <button name="shop" type="submit" class="btn btn-primary btn-lg" style="color: white; background:rgb(23, 79, 182);margin-top:10px;margin-left:30%;width:40%">Search</button>
    </form>
    </div>
</div>








   
<!-- <div class="imgchat" style="margin-left:90%;position:fixed">
<a href="../chatbot/bot.php?prev=../pharmacy/pharmacy_main.php"><img style="width:30%;margin-top:60%" src="../images/chat.png" alt="chatbot"></a>

</div> -->

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
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "75px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function cartP(){
  window.location.href="../pharmacy/ph_cart.php?mprev=../pharmacy/ph_store.php";
}



</script>
<?php 

if(isset($_GET['success'])){
  echo '<script>swal("Item added!")</script>';
 }
 if(isset($_GET['failure'])){
  echo '<script>swal("Item not added!")</script>';
 }
  


?>

</body>
<footer>
  Copyright (c) JustGoTech 2021
  <a href="https://icons8.com/icon/3220/plus">Plus icon by Icons8</a>
  <div>Icons made by <a href="https://icon54.com/" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</footer>
</html>