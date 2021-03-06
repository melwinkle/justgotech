<!-- page for account info -->

<?php 
  session_start();
  require_once("../../database/connection.php");
  if(!isset($_SESSION['username'])){
    header("Location: ./pharm_log.php" );
  }

  $username=$_SESSION['username'];
  $id=$_SESSION['phid'];
  $fn=$_SESSION['phname'];
  $loc=$_SESSION['location'];

  $sql="SELECT `Phnumber` from `pharmacists` where `PharmID`=$id";
  $query=mysqli_query($conn,$sql);
  $result=mysqli_fetch_assoc($query);
  $number=$result['Phnumber'];
?>

<!-- dashboard for pharmacy -->


<!DOCTYPE html>
<head>
<title>JustGo Pharmacy</title>
 
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
<h4 style="text-align:center;color:white">JustGo Pharmacy</h4>
<hr>
  <img style="width:50%;margin-left: 50px;" src="../../images/us.png" alt="justgotech">
  <a href="#"><h4 style="text-align:center">Linux Pharmacy</h4></a>
  <hr>
  <a style="color:#cccccc" href="../pharmacist/dash.php"><img src="https://img.icons8.com/material/24/cccccc/dashboard-layout.png"/>Dashboard</a>
  <hr>
  <a href="../pharmacist/info.php"><img src="https://img.icons8.com/fluent-systems-filled/24/3498db/delivery-scooter.png"/>Account</a>
  <hr>
  <a style="color:#cccccc" href="../pharmacist/dashor.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Orders</a>
  <hr>
  <a style="color:#cccccc"href="../pharmacist/inventory.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Inventory</a>
  <hr>

  <a style="color:#cccccc"href="../pharmacist/order.php"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>


<div style="margin-left:18%;margin-top:3%">
        <h3><?php echo date('d-M-Y');?></h3>
    <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
        <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div></div>
    </div>

   

<!-- account -->

<div class="main"style="margin-left:30%;margin-top:5%">
<div style="margin-left:68%;color:rgb(4, 23, 75)">
<a style="color:rgb(4, 23, 75);font-size:18pt"href="../pharmacist/info.php"><img src="https://img.icons8.com/ios-filled/40/4a90e2/back.png"/>BACK</a>
</div>
    <div class="row">
        <div class="col-sm-4">    
             <div class='card  mb-4 shadow-sm '  style='background:#ffffff;height:350px;width:250%;border-radius:10px;color:rgb(4, 23, 75)'>
                    <h2 style="margin-top:10px;color:rgb(4, 23, 75);text-align:center"><img src="https://img.icons8.com/metro/26/3498db/lock-2.png"/>CHANGE PASSWORD</h2>
               

                    <div style="margin-left:15%;margin-top:2%">
                       
                      <form action="update_in.php?id=<?php echo $id;?>" method="post">
                        <label for="user">New password</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px"type="password" name="newpass" id="user"><br>



                        <label for="lname">Re-enter new password</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px" type="password" name="repass" id="lname"><br>

                       

                    

                        <button name="change"type="submit" style="margin-top:5%;margin-left:20%;width:40%;height:20%;background:rgb(4, 23, 75)"class="btn btn-primary">UPDATE</a>
                        </form>
                    </div>
                </div>
         </div>

    </div>
</div>
<!-- next -->

<!-- next -->

<!-- end -->
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

function nec(){
  window.location.href="../delivery/doneder.php";
}


</script>
</body>

</html>