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

<div class="row">
  <div>
<div class="bcart" style="margin-left:400px;margin-top: 10px">
 <div style="background:blue;color:white; width:40%;border-radius:10px 10px 0 0; height: 50px">
  <h5 style="float:left;margin-left: 8px;margin-top: 15px;">Order#A123  </h5>

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
    <tr>
      <th scope="row"><?php echo "<div>
       <h5>".$med."</h5>
    <h6>".$ph."</h6>
    <p>12 strips in a box</p>
    <p>".$loc."</p>
</div>
"; ?></th>
      <td > 1</td>
      <td>
        <div style="color:blue"><h5>Ghc 20</h5>
      </div>
        
      </td>
    </tr>

    <tr>
      <th scope="row"><?php echo "<div>
       <h5>".$med."</h5>
    <h6>".$ph."</h6>
    <p>12 strips in a box</p>
    <p>".$loc."</p>
</div>
"; ?></th>
      <td > 1</td>
      <td>
        <div style="color:blue"><h5>Ghc 20</h5>
      </div>
        
      </td>
    </tr>
    
  </tbody>

  <tr>

  <td colspan="4">
    <div style="float:right">
      <p>SubTotal: Ghc 20 </p>
      <p>Tax: Ghc 2 </p>
      <p>Delivery: Ghc 5 </p>
      <p>Total: Ghc 27 </p>




    </div>
   </td>
</tr>
</table>
</div>
</div>

<div>
<div class="bcart" style="margin-left:400px;margin-top: 10px">
 <div style="background:blue;color:white; width:40%;border-radius:10px 10px 0 0; height: 50px">
  <h5 style="float:left;margin-left: 8px;margin-top: 15px;">Order#A123  </h5>

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
    <tr>
      <th scope="row"><?php echo "<div>
       <h5>".$med."</h5>
    <h6>".$ph."</h6>
    <p>12 strips in a box</p>
    <p>".$loc."</p>
</div>
"; ?></th>
      <td > 1</td>
      <td>
        <div style="color:blue"><h5>Ghc 20</h5>
      </div>
        
      </td>
    </tr>

    <tr>
      <th scope="row"><?php echo "<div>
       <h5>".$med."</h5>
    <h6>".$ph."</h6>
    <p>12 strips in a box</p>
    <p>".$loc."</p>
</div>
"; ?></th>
      <td > 1</td>
      <td>
        <div style="color:blue"><h5>Ghc 20</h5>
      </div>
        
      </td>
    </tr>
    
  </tbody>

  <tr>

  <td colspan="4">
    <div style="float:right">
      <p>SubTotal: Ghc 20 </p>
      <p>Tax: Ghc 2 </p>
      <p>Delivery: Ghc 5 </p>
      <p>Total: Ghc 27 </p>




    </div>
   </td>
</tr>
</table>
</div>
</div>
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


</script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
  <div>Icons made by <a href="https://icon54.com/" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</footer>
</html>