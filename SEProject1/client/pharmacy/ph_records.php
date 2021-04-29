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


$count="SELECT count(*) as total from temp_cart where PatientID=$patient and status='Basket'";
$conph=mysqli_query($conn,$count);
$cout=mysqli_fetch_assoc($conph);
$cart=$cout['total'];

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
  <a href="../pharmacy/pharmacy_main.php"><img src="https://img.icons8.com/material-sharp/24/000000/long-arrow-left.png"/>BACK</a>
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
 
  <button style="background:none;border:none;margin-left:63%"><img style="width:25%"src="https://img.icons8.com/plasticine/100/000000/appointment-reminders.png"/><img style="width:10%"src="https://img.icons8.com/ios-filled/50/e74c3c/2-circle.png"/></button>

  <button onclick="cartP()"style="background:none;border:none;margin-left:-9%"><img  style="width:30%" src="https://img.icons8.com/fluent/48/4a90e2/fast-cart.png"/><img style="width:20%"src="https://img.icons8.com/ios-filled/50/000000/<?php echo $cart;?>-circle.png"/></button>
  <span style="font-size:20px;cursor:pointer;margin-left:-2% " onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:5%" src="../../images/stethoscope.png" alt="profile"> </span>

  </div>
  
</div>


<div class="hname" style="margin-left:35%;color:rgb(23, 79, 182)">
<h1>PHARMACY PURCHASES</h1>
</div>

<div class="row">
<?php  $puc="SELECT * from pharm_orders where PatientID=$patient";
$pur=mysqli_query($conn,$puc);



while($purc=mysqli_fetch_assoc($pur)){
  $id=$purc['POID'];

?>
<div class='column' style="width:110%">
<div class="bcart" style="margin-left:300px;margin-top: 60px">
 <div style="background:blue;color:white; width:40%;border-radius:10px 10px 0 0; height: 50px">
  <h5 style="float:left;margin-left: 8px;margin-top: 15px;">Order#JT<?php
  echo $id?></h5>

<a href="../pharmacy/ph_pay.php?id=<?php echo $id ?>" style="margin-left: 200px;margin-top:-50px" type="button" class="btn btn-primary" style="margin-bottom: 15px">TRACK ORDER</a>

 </div>


<div class="tcart" style="width: 40%; border: 2px solid blue;border-radius:0 0 10px 10px">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  <?php


  $swl="SELECT * FROM perm_cart 
  inner join temp_cart on perm_cart.TC=temp_cart.TC 
  inner join pharm_orders on perm_cart.POID=pharm_orders.POID 
  inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD 
  inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID 
  inner join drugs  on pharm_drugs.DID = drugs.DID 
  where temp_cart.PatientID=$patient and pharm_orders.POID=$id
  ORDER BY perm_cart.TC DESC ";
  $sw=mysqli_query($conn,$swl);

  if(mysqli_num_rows($sw)>0){
  while($sl=mysqli_fetch_assoc($sw)){

  echo "
    <tr>
      <th scope='row'>
      <div>
       <h5>".$sl['DName']."</h5>
    <h6>".$sl['Pharm_Name']."</h6>
    <p>".$sl['Description']."</p>
    <p>".$sl['Special_notes']."</p>
    <p>".$sl['Pickup_Mode']."</p>
</div>
</th>"; ?>
<!-- <input style="width:50%" class="quantity" min="0" name="quantity" value="1" type="number"> -->
      <td > <h4><?php echo $sl['Item_quantity']?></h4></td>
      <td>
        <div style="color:blue"><h4>Ghc <?php $bill=$sl['Price']; echo "$bill" ;?></h4>
      </div>
        
      </td>
     
    </tr>
    <?php
 }
}
    ?>
    
  </tbody>

  <tr>

  <td colspan="4">
    <div style="float:right">
      <p>TOTAL BILL:Ghc <?php 
      $bils="SELECT P_Bill from pharm_orders where POID=$id";
      $bis=mysqli_query($conn,$bils);
      
    
      $bisl=mysqli_fetch_assoc($bis);
      $bil=$bisl['P_Bill'];
      echo $bil;
      
      
      ?> </p>




    </div>
   </td>
</tr>
</table>
</div>


</div>


</div>
<?php }?>

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
function cartP(){

  window.location.href="../pharmacy/ph_cart.php?mprev=../pharmacy/ph_records.php";

}


</script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
  <div>Icons made by <a href="https://icon54.com/" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</footer>
</html>