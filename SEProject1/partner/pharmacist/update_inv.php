<!-- Page for inventory-->


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

  $today=date("Y-m-d");

  $sql="SELECT * from pharm_drugs where PharmID=$id";
  $query=mysqli_query($conn,$sql);
  $count=0;

  $number=mysqli_num_rows($query);

  if(isset($_GET['edit'])){
    $did=$_GET['did'];

    $sdate="SELECT * from pharm_drugs inner join drugs on pharm_drugs.DID=drugs.DID where PharmID=$id and pharm_drugs.DID=$did";
    $squery=mysqli_query($conn,$sdate);
    $result=mysqli_fetch_assoc($squery);

    $dname=$result['DName'];
    $dtype=$result['Drug_type'];
    $desc=$result['Description'];
    $md=$result['M_date'];
    $ed=$result['E_date'];
    $p=$result['Price'];
    $q=$result['Quantity'];
    $que=$result['Queries'];
  }
?>


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="pharm.js"></script>
<body >


<div id="mySidenav" class="sidenav">
<h4 style="text-align:center;color:white">JustGo Pharmacy</h4>
<hr>
  <img style="width:50%;margin-left: 50px;" src="../../images/us.png" alt="justgotech">
  <a href="#"><h4 style="text-align:center"><?php echo $fn;?></h4></a>
  <hr>
  <a style="color:#cccccc" href="../pharmacist/dash.php"><img src="https://img.icons8.com/material/24/cccccc/dashboard-layout.png"/>Dashboard</a>
  <hr>
  <a style="color:#cccccc" href="../pharmacist/info.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Account</a>
  <hr>
  <a  style="color:#cccccc" href="../pharmacist/dashor.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/delivery-scooter.png"/>Orders</a>
  <hr>
  <a href="../pharmacist/inventory.php"><img src="https://img.icons8.com/wired/24/3498db/get-cash.png"/>Inventory</a>
  <hr>

  <a style="color:#cccccc"href="../pharmacist/order.php"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>


<div style="margin-left:18%;margin-top:3%">
        <h3><?php echo date('d-M-Y');?></h3>
        <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
                <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
         </div>
         </div>
<!-- orders and balance -->
<div class="main"style="margin-left:18%;margin-top:2%">
    <!-- next row -->
   

<!-- new row -->

<!-- table of inventory -->



<div style="margin-left:1000px;margin-top:-2.5%;">
         <a style="color:#26e07f;font-size:14pt" href="../pharmacist/inventory.php">  BACK<img src="https://img.icons8.com/android/24/26e07f/plus.png"/></a>
       
         </div>
         <div class="row">
        <div class="col-sm-4">    
             <div class='card  mb-4 shadow-sm '  style='background:#ffffff;height:800px;width:250%;border-radius:10px;color:rgb(4, 23, 75)'>
                    <h2 style="margin-top:10px;color:rgb(4, 23, 75);text-align:center"><img src="https://img.icons8.com/fluent-systems-filled/48/3498db/guest-male.png"/>UPDATE <?php echo $dname;?></h2>
                    <div style="margin-left:15%;margin-top:2%">
         <form action="update_in.php?did=<?php echo $did;?>&pid=<?php echo $id;?>" method="post">
         <label for="user">Drug Name</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px"type="text" name="dn" id="user"value="<?php echo $dname;?>" readonly><br>



                        <label for="lname">Drug Type</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px" type="text" name="dt" id="lname" value="<?php echo $dtype;?>" readonly ><br>

                        <label for="dob">Description</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px" type="text" name="desc" id="dob" value="<?php echo $desc;?>" readonly ><br>

                        <label for="md">Mannufacturing date </label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px"type="date" name="md" id="md" value="<?php echo $md;?>" ><br>
                        <label for="ed">Expiry Date </label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px"type="date" name="ed" id="ed" value="<?php echo $ed;?>"  ><br>
                        <label for="quan">Quantity </label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px"type="number" name="quan" id="quan" min=1  value="<?php echo $q;?>" ><br>
                        <label for="price">Price </label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px"type="number" name="price" id="price" value="<?php echo $p;?>" ><br>
                        <label for="quer">Queries </label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:80%;height:40px"type="text" name="quers" id="quer" value="<?php echo $que;?>" readonly><br>

                    

                        <button name="edit"type="submit" style="margin-top:5%;margin-left:20%;width:20%;height:20%;background:rgb(4, 23, 75)"class="btn btn-primary">UPDATE</a>
                        </form>
                        </div>
</div>
</div>
</div>
        
                <!-- end of table -->
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


function upd(){
     let quant=document.getElementById("Quantity").innerHTML;
     window.location.href = "../pharmacist/update_in.php?edit&did=<?php echo $pid;?>&pid=<?php echo $id;?>&quan=" + quant; 
      
}


</script>


</body>

</html>