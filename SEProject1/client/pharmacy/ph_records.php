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



<body >

  <div id="mySidenav" class="sidenav">
  <a href="../pharmacy/pharmacy_main.php"><img src="https://img.icons8.com/material-sharp/24/000000/long-arrow-left.png"/>BACK</a>
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
       echo "<a href='../pharmacy/ph_suc.php?not&id=$nt&mprev=../pharmacy/ph_records.php'>$mes $da</a>";
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
<h1>PHARMACY PURCHASES</h1>
</div>

<div class="row">
  <?php
  $swl="SELECT * FROM perm_cart 
  inner join temp_cart on perm_cart.TC=temp_cart.TC 
  inner join pharm_orders on perm_cart.POID=pharm_orders.POID 
  inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD 
  inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID 
  inner join drugs  on pharm_drugs.DID = drugs.DID 
  where temp_cart.PatientID=$patient 
  ORDER BY perm_cart.TC DESC ";
  $sw=mysqli_query($conn,$swl);

 ?>
  <div id="table" class="table-editable" style="margin-left:15%;width:1200px;margin-top:2%;background:white">
            <table class="table table-bordered table-responsive-md ">
            <thead>
                <tr>
                <th scope="col">Drug Name</th>
                <th scope="col">Pharmacy</th>
                <th scope="col">Drug Description</th>
                <th scope="col">Delivery Details</th>
                <th scope="col">Drug Mode</th>
                <th scope="col">Quantity</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Total Bill</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(mysqli_num_rows($sw)>0){
                while($sl=mysqli_fetch_assoc($sw)){
            ?>
            <tr class="table-success" >  
                <td scope="row" contenteditable="false"><?php echo $sl['DName']; ?></td>
                <td contenteditable="false"><?php echo $sl['Pharm_Name'];?></td>
                <td contenteditable="false"><?php echo $sl['Description'];?></td>
                <td contenteditable="false" id="md"><?php echo $sl['Special_notes'];?></td>
                <td contenteditable="false" id="ed"><?php echo $sl['Pickup_Mode'];?></td>
                <td contenteditable="false" id="Quantity"><?php echo $sl['Item_quantity'];?></td>
                <td contenteditable="false" id="price">Ghc <?php echo $sl['Price'];?></td>
                <td contenteditable="false" id="quer"><?php echo $sl['P_Bill'];?></td>
                <td><a href="../pharmacy/ph_pay.php?id=<?php echo $sl['POID']; ?>"  class="btn btn-primary" >TRACK ORDER</a></td>
              </tr>

                <?php
                }
                }else{
                  echo "<tr class='table-danger'>
                  <td colspan=9> No Purchases Made</td>
                  </tr>";
                }

                ?>

</tbody>
            </table>

         </div>

   </div>







</div>
<div class="imgchat" style="margin-left:85%;position:fixed">
<a href="../chatbot/bot.php?prev=../pharmacy/pharmacy_main.php"><img style="width:30%;margin-top:60%;margin-left:40%" src="../images/chat.png" alt="chatbot"></a>

</div>

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