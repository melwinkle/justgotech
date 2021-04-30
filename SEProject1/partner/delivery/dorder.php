<!-- page for dashboard for delivery -->

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



$sql="SELECT *,sum(Fee) as balance,count(*) as total from track_order where DelID=$del and Progress!='Delivered' ";
$result=mysqli_query($conn,$sql);
$ri=mysqli_fetch_assoc($result);
$balance=$ri['balance'];
$incoming=$ri['total'];

$sqls="SELECT *,sum(Fee) as balance,count(*) as total from track_order where DelID=$del and Progress='Delivered' ";
$results=mysqli_query($conn,$sqls);
$rc=mysqli_fetch_assoc($results);
$balanc=$rc['balance'];
$completed=$rc['total'];






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
  <img style="width:50%;margin-left: 50px;" src="../../images/us.png" alt="justgotech">
  <a href="#"><h4 style="text-align:center"><?php echo $fn." "; echo $ln;?></h4></a>
  <hr>
  <a href="../delivery/dorder.php"><img src="https://img.icons8.com/fluent/24/000000/dashboard-layout.png"/>Dashboard</a>
  <hr>
  <a style="color:#cccccc" href="../delivery/dupdate.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Account</a>
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

<div class="main"style="margin-left:18%;margin-top:2%">
<div class="row">
    <div class="col-sm-4">    
      
            <div class='card  mb-4 shadow-sm '  style='background:white;height:150px;width:78%;border-radius:2px;color:#cccccc'>
                 <h2 style="margin-top:10px;color:skyblue;text-align:center"><img src="https://img.icons8.com/windows/64/3498db/packaging.png"/><?php echo $incoming;?></h2>
                     <h6 style="text-align:center">INCOMING DELIVERIES</h6>
 
             

            </div>

    </div>




<div class="col-sm-4">    

    <div class='card  mb-4 shadow-sm '  style='background:white;height:150px;width:78%;border-radius:2px;color:#cccccc'>
            <h2 style="margin-top:10px;color:skyblue;text-align:center"><img src="https://img.icons8.com/windows/64/3498db/packaging.png"/><?php echo $completed;?></h2>
                     <h6 style="text-align:center">COMPLETED DELIVERIES</h6>

            </div>
    </div>
    <div class="col-sm-4">    

    <div class='card  mb-4 shadow-sm '  style='background:white;height:150px;width:78%;border-radius:2px;color:#cccccc'>
    <h2 style="margin-top:10px;color:skyblue;text-align:center"><img src="https://img.icons8.com/wired/64/3498db/get-cash.png"/>GHc <?php echo $balanc;?></h2>
                     <h6 style="text-align:center">BALANCE</h6>
            </div>
    </div>
</div>


<div>
</div>

<div style="margin-left:-1%;margin-top:3%">
<h3>
Latest Requests
</h3>
<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>

<div class="row" style="margin-top: 2%">
<?php  

$final="SELECT track_order.TID,customer.firstname,customer.lastname,pharmacists.Pharm_Name,pharmacists.Location as phLocation,track_order.Progress,pharm_orders.Payment,track_order.Fee,pharm_orders.Location from track_order inner join perm_cart on track_order.POID=perm_cart.POID inner join pharm_orders on perm_cart.POID=pharm_orders.POID inner join temp_cart on perm_cart.TC=temp_cart.TC inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID inner join customer on pharm_orders.PatientID=customer.PatientID where Progress='Processed' or  DelID=$del GROUP BY track_order.POID limit 2";
$finale=mysqli_query($conn,$final);
while($finales=mysqli_fetch_assoc($finale)){
  $final_fn=$finales['firstname'];
  $final_ln=$finales['lastname'];
  $final_ph=$finales['Pharm_Name'];
  $final_pl=$finales['phLocation'];
  $final_pr=$finales['Progress'];
  $final_py=$finales['Payment'];
  $final_fe=$finales['Fee'];
  $final_lo=$finales['Location'];
  
  ?>
<div class="column">
        <div class='card  mb-4 shadow-sm '  style='background:white;height:135px;width:1150px;border-radius:2px;color:#cccccc'>
            <span style="width:90px;margin-left:20px;margin-top:15px;color:white;background:skyblue;">
              <h1 style="margin-left:20px;margin-top:4px">29</h1>
              <h4 style="margin-left: 22px">Apr</h4>
            </span>

          <span style="margin-left:150px;margin-top:-85px;color:black">
              <img src="../../images/user.png" style="width:5%;margin-left:13px"alt="">
              <h5><?php echo $final_fn." ".$final_ln; ?></h5>
            </span>

          <span style="margin-left:250px;margin-top:-86px">
                <ul style=" list-style-type: none">
                    <li ><span style="color:black"><img style="width: 1.5%"src="../../images/oval.png"/>Pickup :</span> <span ><?php echo $final_ph." ".$final_pl; ?></span></li><br>
                    <li><span style="color:black"><img style="width: 2%"src="../../images/place.png"/>DropOff: </span><span ><?php echo $final_lo; ?></span></li>
                  </ul>
              </span>
           
            <span style="margin-left:650px;margin-top:-90px">
                <ul style=" list-style-type: none">
                <?php 
                $tc=$finales['TID'];
            if($final_pr=="Processed"){
              ?>
              <li><img src="https://img.icons8.com/material-sharp/15/e74c3c/filled-circle.png"/><?php echo $final_pr; ?></li>
              <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                  </ul>

              </span>


              
            <span style="margin-left:970px;margin-top:-85px">
                <a href="../delivery/ddash.php?accept=true&tc=<?php echo $tc;?>&del=<?php echo $del ;?>" class="btn btn-success">ACCEPT</a>
              </span>
              <?php
            }
            if($final_pr=="Accepted"){
              ?>
            <li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/><?php echo $final_pr; ?></li>
            <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                  </ul>

              </span>


              
            <span style="margin-left:970px;margin-top:-85px">
                <a href="../delivery/ddash.php?fin=true&tc=<?php echo $tc;?>&del=<?php echo $del ;?>"  class="btn btn-warning">FINALIZE</a>
              </span>
            <?php
            }
            if($final_pr=="Picked"){
              ?>
            <li><img src="https://img.icons8.com/material-sharp/15/3498db/filled-circle.png"/><?php echo $final_pr; ?></li>
            <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                  </ul>

              </span>


              
            <span style="margin-left:970px;margin-top:-85px">
                <a href="../delivery/ddash.php?str=true&tc=<?php echo $tc;?>&del=<?php echo $del ;?>" class="btn btn-primary">START JOURNEY</a>
              </span>
            <?php
            }
            if($final_pr=="Route"){
              ?>
            <li><img src="https://img.icons8.com/material-sharp/15/DBB634/filled-circle.png"/><?php echo $final_pr; ?></li>
            <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                  </ul>

              </span>


              
            <span style="margin-left:970px;margin-top:-85px">
                <a href="../delivery/ddash.php?arr=true&tc=<?php echo $tc;?>&del=<?php echo $del ;?>" class="btn btn-info">ARRIVED</a>
              </span>
            <?php
            }
            if($final_pr=="Delivered"){
              ?>
            <li><img src="https://img.icons8.com/material-sharp/15/2ecc71/filled-circle.png"/><?php echo $final_pr; ?></li>
            <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                  </ul>

              </span>


              
            
            <?php
            }
            
            
            ?>
                    
                    
          </div>
      </div>
      <?php
      }
      ?>
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