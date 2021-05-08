<!-- page for updating delivery information -->
<!-- page for monitoring orders -->

<!-- page for delivery login -->
<?php 
session_start();
require_once("../../database/connection.php");
if(!isset($_SESSION['username'])){
  header("Location: ../delivery/dindex.php");
}
$username=$_SESSION['username'];
$del=$_SESSION['delid'];
$fn=$_SESSION['fname'];
$ln=$_SESSION['lname'];



$sql="SELECT * from Delivery where DelID=$del  ";
$result=mysqli_query($conn,$sql);
$ri=mysqli_fetch_assoc($result);
$gen=$ri['Gender'];
$dob=$ri['DOB'];
$num=$ri['DelNum'];







?>


<!DOCTYPE html>
<head>
<title>JustGo Delivery</title>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
<body >


<div id="mySidenav" class="sidenav">
<h4 style="text-align:center;color:#2464ad">JustGo Delivery</h4>
<hr>
  <img style="width:50%;margin-left: 20%;" src="../../images/us.png" alt="justgotech">
  <a href="#"><h5 style="text-align:center"><?php echo $fn." ".$ln; ?></h5></a>
  <hr>
  <a style="color:#cccccc" href="../delivery/dorder.php"><img src="https://img.icons8.com/material/24/cccccc/dashboard-layout.png"/>Dashboard</a>
  <hr>
  <a  href="../delivery/dupdate.php"><img src="https://img.icons8.com/fluent-systems-filled/24/3498db/guest-male.png"/>Account</a>
  <hr>
  <a style="color:#cccccc"href="../delivery/doneder.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/delivery-scooter.png"/>Deliveries</a>
  <hr>
  <a style="color:#cccccc"href="../delivery/dbalance.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Balance</a>
  <hr>

  <a style="color:#cccccc"href="../delivery/dlog.php"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>


<div style="margin-left:18%;margin-top:3%">
<h3>
<?php
echo date('d-M');

?>
</h3>


<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>



<div class="main"style="margin-left:30%;margin-top:3%">
<div style="margin-left:55%;color:#3498db">
<a style="color:#3498db;font-size:18pt"href="../delivery/dpass.php"><img src="https://img.icons8.com/metro/26/3498db/lock-2.png"/>Change Password</a>
</div>
    <div class="row">
        <div class="col-sm-4">    
             <div class='card  mb-4 shadow-sm '  style='background:#ffffff;height:600px;width:250%;border-radius:10px;color:#3498db'>
                    <h2 style="margin-top:10px;color:#3498db;text-align:center"><img src="https://img.icons8.com/fluent-systems-filled/48/3498db/guest-male.png"/>ACCOUNT INFORMATION</h2>
               

                    <div style="margin-left:15%;margin-top:2%">
                       
                      <form action="ddash.php?id=<?php echo $del;?>" method="post">
                        <label for="user">Username</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%"type="text" name="user" id="user" value="<?php echo $username;?>"readonly><br>

                        <label for="fname">First Name</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%" type="text" name="fname" id="fname" value="<?php echo $fn;?>"><br>

                        <label for="lname">Last Name</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%" type="text" name="lname" id="lname" value="<?php echo $ln;?>"><br>

                        <label for="dob">Date of Birth</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%" type="text" name="dob" id="dob" value="<?php echo $dob;?>" readonly ><br>

                        <label for="gender">Gender</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%"type="text" name="gender" id="gender"  value="<?php echo $gen;?>"readonly><br>

                        <label for="num">Phone Number</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%" type="text" name="num" id="num" value="<?php echo $num;?>"><br>

                        <button name="update"type="submit" style="margin-top:5%;margin-left:20%;width:40%;height:10%;background:#3498db"class="btn btn-primary">UPDATE</a>
                        </form>
                    </div>
                </div>
         </div>

    </div>
</div>

<!-- end -->


</div>





<?php 
if(isset($_GET['success'])){
    echo "<script>swal('Account Updated!')</script>";
}
if(isset($_GET['failure'])){
    echo "<script>swal('Account Not Updated!')</script>";
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
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "75px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function upq(){
     let fn=document.getElementById("fname").value;
     let ln=document.getElementById("lname").value;
     let num=document.getElementById("num").value;
      window.location.href = "../delivery/ddash.php?update=true&id=<?php echo $delid; ?>&fname="+fn +"&lname="+ln+"&num=" + num; 
}
</script>
</body>

</html>