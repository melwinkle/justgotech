<?php 
if(isset($_GET['ph'])){
  $ph=$_GET['ph'];

   }

   if(isset($_GET['pr'])){
    $pr=$_GET['pr'];
  
     }
     if(isset($_GET['med'])){
      $med=$_GET['med'];
    
       }
       if(isset($_GET['loc'])){
        $loc=$_GET['loc'];
      
         }


?>
<!-- Home page for tracking orders-->
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


$notif="SELECT * from notification where PatientID=$patient and NRead='Unread'";
$noq=mysqli_query($conn,$notif);
if(mysqli_num_rows($noq)>0){
  $nn=mysqli_num_rows($noq);
 
}else{
  $nn=0;
}

?>
<html>
<head>
<title>PHARMACY</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/><link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="pharm.css">
<link rel="stylesheet" href="star.css">
<link rel="stylesheet" href="num.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body >

  <div id="mySidenav" class="sidenav">
  <a href="../pharmacy/ph_records.php"><img src="https://img.icons8.com/material-sharp/24/000000/long-arrow-left.png"/>BACK</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/cov.php">Virtual Screening</a>
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
       echo "<a href='../pharmacy/ph_suc.php?not&id=$nt&mprev=../pharmacy/ph_pay.php'>$mes $da</a>";
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


<div class="hname" style="margin-left:35%;color:rgb(23, 79, 182)">
<h1>PHARMACY TRACKER</h1>
</div>

<div class="bcart" style="margin-left:400px;margin-top: 10px">
 <div style="background:blue;color:white; width:60%;border-radius:10px 10px 0 0; height: 50px">
  <h5 style="float:left;margin-left: 8px;margin-top: 15px;">Order#JT<?php
  if(isset($_GET['id'])){
  $id=$_GET['id'];
} echo $id?> Confirmed </h5>

 </div>


<div class="tcart" style="width: 60%; border: 2px solid blue;border-radius:0 0 10px 10px">
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

if(isset($_GET['id'])){
  $id=$_GET['id'];
}
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

      <button class="btn btn-primary"onclick="paym()">MAKE PAYMENT</button>




    </div>
   </td>
</tr>
</table>
</div>


<div style="background:blue;color:white;border-radius:10px 10px 0 0;width: 60%;margin-top:20px;height: 40px;">
       <h5 style="float:left;margin-left: 8px;margin-top: 15px;">Order Progress</h5>
   </div>
<div style="border:1px solid blue;border-radius:0 0 10px 10px; width: 60%;margin-top:-10px">
   
<!-- track order table -->
<?php

$track="SELECT * from track_order where POID=$id";
$tr=mysqli_query($conn,$track);
$sm=mysqli_fetch_assoc($tr);

$rid=$sm['DelID'];
if($sm['Ratings']==0){
  $rate='<div class="stars">

  <div class="d-flex justify-content-left my-4" style="margin-left:80px" >
  <span class="font-weight-bold indigo-text mr-2 mt-1">0</span>
    <form class="range-field w-100" action="ph_suc.php?id='.$id.'" method="post">
  
      <input class="border-0" style="width:450px"name="rate" type="range" min="0" steps="0.5"max="5" /><br>
      
      <button name="ratings" style="margin-top:5px;margin-left:200px" class="btn btn-primary" type="submit">Rate</button>
    </form>
    <span style="margin-left:280px" class="font-weight-bold ">5</span>
  </div>
  
     
  </div>';
}else{
  $rat=$sm['Ratings'];
  $rate="<div><h3><img src='https://img.icons8.com/fluent/48/26e07f/filled-star.png'/>Rating:$rat/5</h3></div>";
}


$ride="SELECT * from delivery where DelID=$rid";

$ri=mysqli_query($conn,$ride);
if($ri){


$riq=mysqli_fetch_assoc($ri);
$rn=$riq['DelFName'];
$rl=$riq['DeLName'];
$ru=$riq['DelNum'];
}else{
  $rn="No";
$rl="Rider";
$ru="00000000000";
}
if($sm['Progress']=="Pending"){



?>


   <div class="progress" style="border-radius:5px;margin-left: 40px;width:90%;height: 15px;margin-top:10px">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<div>
      <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Awaiting confirmation from vendor</p>
   
     
  </div>
  
</div>

<?php 
}
if($sm['Progress']=="Processed"){
  ?>
   <div class="progress" style="border-radius:5px;margin-left: 40px;width:90%;height: 15px;margin-top:10px">
  <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<div>
      <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Awaiting confirmation from vendor</p>
      <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Order has been processed</p>
 
     
  </div>
  
</div>

<?php 
}


if($sm['Progress']=="Picked"){




?>
<div class="progress" style="border-radius:5px;margin-left: 40px;width:90%;height: 15px;margin-top:10px">
  <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<div>
      <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Awaiting confirmation from vendor</p>
      <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Order has been processed</p>
      <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Rider has picked your order </p>
   
     
  </div>
  
</div>

<div style="background:blue;color:white;border-radius:10px 10px 0 0;width: 60%;margin-top:20px;height: 40px;margin-bottom:1px">
       <h5 style="float:left;margin-left: 8px;margin-top: 15px;">Delivery Details</h5>
   </div>
<div style="border:1px solid blue;border-radius:0 0 10px 10px; width: 60%;margin-top:5px;">

<img src="../../images/us.png" alt="delivery" style="width:65px;float:left;margin-left:10px">
<ul style="list-style:none"><li><h5  >Rider Name:<?php echo $rn.' '.$rl;?></h5></li>
<li><h5 >Rider Number:<?php echo $ru;?></h5></li></ul>




</div>

<?php 
}
if($sm['Progress']=="Route"){
  ?>
  <div class="progress" style="border-radius:5px;margin-left: 40px;width:90%;height: 15px;margin-top:10px">
    <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
    
  </div>
  <div>
        <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Awaiting confirmation from vendor</p>
        <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Order has been processed</p>
        <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Rider has picked your order </p>
        <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Rider is on his way </p>
       
    </div>
    
  </div>

  <div style="background:blue;color:white;border-radius:10px 10px 0 0;width: 60%;margin-top:20px;height: 40px;margin-bottom:1px">
       <h5 style="float:left;margin-left: 8px;margin-top: 15px;">Delivery Details</h5>
   </div>
<div style="border:1px solid blue;border-radius:0 0 10px 10px; width: 60%;margin-top:5px;">

<img src="../../images/us.png" alt="delivery" style="width:65px;float:left;margin-left:10px">
<ul style="list-style:none"><li><h5  >Rider Name:<?php echo $rn.' '.$rl;?></h5></li>
<li><h5 >Rider Number:<?php echo $ru;?></h5></li></ul>


</div>
  
  <?php 

  
}

if($sm['Progress']=="Delivered"){
  ?>
  <div class="progress" style="border-radius:5px;margin-left: 40px;width:90%;height: 15px;margin-top:10px">
    <div class="progress-bar bg-succes" role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
    
  </div>
  <div>
        <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Awaiting confirmation from vendor</p>
        <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Order has been processed</p>
        <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Rider has picked your order </p>
        <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Rider is on his way </p>
        <p><img src="https://img.icons8.com/material-outlined/24/26e07f/checked-2--v1.png"/>Rider has arrived </p>
    </div>
    
  </div>
  


 
  

<div style="background:blue;color:white;border-radius:10px 10px 0 0;width: 60%;margin-top:20px;height: 40px;margin-bottom:1px">
       <h5 style="float:left;margin-left: 8px;margin-top: 15px;">Delivery Details</h5>
   </div>
<div style="border:1px solid blue;border-radius:0 0 10px 10px; width: 60%;margin-top:5px;">

<img src="../../images/us.png" alt="delivery" style="width:65px;float:left;margin-left:10px">
<ul style="list-style:none"><li><h5  >Rider Name:<?php echo $rn.' '.$rl;?></h5></li>
<li><h5 >Rider Number:<?php echo $ru;?></h5></li></ul>

<?php echo $rate;?>
<!-- <div class="stars">

<div class="d-flex justify-content-left my-4" style="margin-left:80px" >
<span class="font-weight-bold indigo-text mr-2 mt-1">0</span>
  <form class="range-field w-100" action="ph_suc.php?id=<?php echo $id;?>" method="post">

    <input class="border-0" style="width:450px"name="rate" type="range" min="0" steps="0.5"max="5" /><br>
    
    <button name="ratings" style="margin-top:5px;margin-left:200px" class="btn btn-primary" type="submit">Rate</button>
  </form>
  <span style="margin-left:280px" class="font-weight-bold ">5</span>
</div>

   
</div> -->


</div>
<?php 
  }
?>
        
        

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
function shop(){
    window.location.href="../pharmacy/ph_store.php";
}

function cartP(){
  window.location.href="../pharmacy/ph_cart.php?mprev=../pharmacy/ph_pay.php";
}

function paym(){
  window.location.href="https://flutterwave.com/pay/paymenttwo";
}

</script>
<script>
    <?php 
    if(isset($_GET["success"])){
        ?>
        swal("Order Confirmed!", "Continue Shopping for more experience!", "success");
        <?php
    }
    ?>


    
</script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
  <div>Icons made by <a href="https://icon54.com/" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</footer>
</html>
