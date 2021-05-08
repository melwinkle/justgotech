<!-- Replica bank account  -->
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



$sql="SELECT sum(Fee) as balance from track_order where DelID=$del and Progress='Delivered' ";
$result=mysqli_query($conn,$sql);
$ri=mysqli_fetch_assoc($result);
$balance=$ri['balance'];

$date=date('Y-m-d');
$month=date('m');

$sqls="SELECT sum(Fee) as balance from track_order inner join pharm_orders on track_order.POID=pharm_orders.POID where DelID=$del and Progress='Delivered' and Order_Date=$date  ";
$results=mysqli_query($conn,$sqls);
$rc=mysqli_fetch_assoc($results);
$balanc=$rc['balance'];


$sqs="SELECT sum(Fee) as balance from track_order inner join pharm_orders on track_order.POID=pharm_orders.POID where DelID=$del and Progress='Delivered' and MONTH(Order_Date)=$month  ";
$resuls=mysqli_query($conn,$sqs);
$yr=mysqli_fetch_assoc($resuls);
$balan=$yr['balance'];




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
  <a href="#"><h5 style="text-align:center">Frank Rose</h5></a>
  <hr>
  <a style="color:#cccccc" href="../delivery/dorder.php"><img src="https://img.icons8.com/material/24/cccccc/dashboard-layout.png"/>Dashboard</a>
  <hr>
  <a style="color:#cccccc" href="../delivery/dupdate.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Account</a>
  <hr>
  <a style="color:#cccccc" href="../delivery/doneder.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/delivery-scooter.png"/>Deliveries</a>
  <hr>
  <a href="../delivery/dbalance.php"><img src="https://img.icons8.com/wired/24/3498db/get-cash.png"/>Balance</a>
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

<div class="main"style="margin-left:20%;margin-top:2%">
<div class="row">
    <div class="col-sm-4">    
      
            <div class='card  mb-4 shadow-sm '  style='background-image: linear-gradient(to bottom right,#3498db, #3488db);height:320px;width:600px;border-radius:8px;color:white'>
            <h4 style="float:left;margin-top:50px;"><img src="https://img.icons8.com/ios/50/ffffff/us-dollar--v1.png"/>Total Balance</h4>
                 <h1 style="margin-top:40px;color:white;text-align:center">GHC <?php echo $balance;?></h1>
                   
 
             

            </div>

    </div>




<div class="col-sm-4">    

    <div class='card  mb-4 shadow-sm '  style='margin-left:70%;background-image: linear-gradient(to bottom right,#3488db, #3490db);height:150px;width:78%;border-radius:8px;color:white'>
    <h4 style="margin-top:5%;;text-align:center"><img src="https://img.icons8.com/ios/40/ffffff/us-dollar--v1.png"/>Daily Total</h4>
            <h2 style="margin-top:10px;color:white;text-align:center">GHC <?php echo $balanc;?></h2>
                    

            </div>
    </div>
    <div class="col-sm-4">    

    <div class='card  mb-4 shadow-sm '  style='margin-left:-36%;background-image: linear-gradient(to bottom right,#3488db, #3478db);height:150px;width:78%;border-radius:8px;color:white;margin-top:45%'>
    <h4 style="margin-top:5%;;text-align:center"><img src="https://img.icons8.com/ios/40/ffffff/us-dollar--v1.png"/>Monthly Total</h4>
            <h2 style="margin-top:10px;color:white;text-align:center">GHC <?php echo $balan;?></h2>
                    

            </div>
    </div>
    
</div>


<div>
</div>

<div style="margin-left:-1%;margin-top:3%">
<h3>
Receipts
</h3>
<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>

<div class="row" style="margin-top: 2%">
<?php
$final="SELECT track_order.TID,customer.firstname,customer.lastname,pharmacists.Pharm_Name,pharmacists.Location as phLocation,track_order.Fee,pharm_orders.Location from track_order inner join perm_cart on track_order.POID=perm_cart.POID inner join pharm_orders on perm_cart.POID=pharm_orders.POID inner join temp_cart on perm_cart.TC=temp_cart.TC inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID inner join customer on pharm_orders.PatientID=customer.PatientID where Progress='Delivered' and DelID=$del  GROUP BY track_order.POID ";
$finale=mysqli_query($conn,$final);
while($finales=mysqli_fetch_assoc($finale)){
  $final_fn=$finales['firstname'];
  $final_ln=$finales['lastname'];
  $final_ph=$finales['Pharm_Name'];
  $final_pl=$finales['phLocation'];
  $final_fe=$finales['Fee'];
  $final_lo=$finales['Location'];
  $tc=$finales['TID'];
  
  ?>
    <div class="col-sm-4" >
        <div class='card  mb-4 shadow-sm '  style='background:white;height:120px;width:550px;border-radius:5px;color:#cccccc'>
        <span style="margin-top:10px;margin-left: 440px;color:#3498db">GHC <?php echo $final_fe;?></span>
            <div style="width:90px;margin-left:20px;margin-top:-4px;color:white;background:skyblue;">
                <h5 style="margin-left:20px;margin-top:4px">Order
                    </h5>
                <h4 style="margin-left: 15px">#TO<?php echo $tc;?></h4>
            </div>

            <div style="margin-left:130px;margin-top:-60px;color:black">
                <img src="../../images/user.png" style="width:10%;margin-left:15px"alt="">
            <h5><?php echo $final_fn." ".$final_ln;?></h5>
          
            </div>

            
            <div  style="margin-left:240px;margin-top:-80px">
                <span style="color:black"><img style="width: 3%"src="../../images/oval.png"/>Pickup :</span> <span ><?php echo $final_ph." ".$final_pl;?></span><br>
                <span style="color:black"><img style="width: 3%"src="../../images/place.png"/>DropOff: </span><span ><?php echo $final_lo;?></span>
            </div>       
        </div>
    </div>

<?php
}
?>
<!-- end -->
<!-- next -->

<!-- end -->
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

</html>