<!-- page for pharmacy orders -->


<?php 

session_start();
require_once("../../database/connection.php");
if(!isset($_SESSION['username'])){
  header("Location: ../pharmacist/pharm_log.php" );
}


$username=$_SESSION['username'];
$id=$_SESSION['phid'];
$fn=$_SESSION['phname'];
$loc=$_SESSION['location'];

$today=date("Y-m-d");

$sql="SELECT sum(P_Bill) as tb from perm_cart inner join temp_cart on perm_cart.TC=temp_cart.TC inner join pharm_orders on perm_cart.POID=pharm_orders.POID inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD  where pharm_drugs.PharmID=$id group by pharm_orders.POID;";
$query=mysqli_query($conn,$sql);
$number=mysqli_num_rows($query);
$db=0;
while($res=mysqli_fetch_assoc($query)){
  if($number>0){
    $db=$db+$res['tb'];
  }else{
    $db=0.0;
  }
}


$month=date("m");
$sm="SELECT * from perm_cart inner join temp_cart on perm_cart.TC=temp_cart.TC inner join pharm_orders on perm_cart.POID=pharm_orders.POID inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD  where pharm_drugs.PharmID=$id and MONTH(Order_Date)='$month' group by pharm_orders.POID;";
$qm=mysqli_query($conn,$sm);
$num=mysqli_num_rows($qm);



$sdate="SELECT * from pharm_drugs where PharmID=$id ";
$squery=mysqli_query($conn,$sdate);
$expg=mysqli_num_rows($squery);





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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="pharm.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

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
  <a style="color:#cccccc" href="../pharmacist/info.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Account</a>
  <hr>
  <a  href="../pharmacist/dashor.php"><img src="https://img.icons8.com/fluent-systems-filled/24/3498db/delivery-scooter.png"/>Orders</a>
  <hr>
  <a style="color:#cccccc"href="../pharmacist/inventory.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Inventory</a>
  <hr>

  <a style="color:#cccccc"href="../pharmacist/order.php"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>


<div style="margin-left:18%;margin-top:3%">
        <h3><?php echo date('d-M-Y');?></h3>
        <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
                <div class="progress-bar bg" role="progressbar" style="width:100%;background:rgb(183, 83, 36)" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
         </div>
         </div>
<!-- orders and balance -->
<div class="main"style="margin-left:18%;margin-top:2%">
    <!-- next row -->
    <div class="row">
                <div class="col-sm-4">    
                         <div class='card  mb-4 shadow-sm '  style='background:rgb(133, 83, 46);height:150px;width:78%;border-radius:5px;color: white'>
                                 <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/><?php echo $number;?></h2>
                                 <h6 style="text-align:center">TOTAL ORDERS</h6>
                            
                            </div>

                     </div>
<!-- next card -->
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(163, 83, 36);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/><?php echo $num;?></h2>
                                <h6 style="text-align:center">MONTHLY ORDER</h6>

                            </div>
                
                    </div>
                    <!-- next card -->
                
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(143, 93, 36);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/wired/64/ffffff/get-cash.png"/><?php echo $db;?></h2>
                                <h6 style="text-align:center">TOTAL BALANCE</h6>
                            </div>
                    
                    </div>
            </div>
<!-- end of columns -->
    <div>

<!-- new row -->

<!-- latest orders -->
<div style="margin-left:-1%;margin-top:3%">
<h3>
Latest Orders
</h3>
<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg" role="progressbar" style="width:100%;background:rgb(163, 83, 36)" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>

<div class="row" style="margin-top: 2%">

<?php  

$final="SELECT customer.PatientID as pd,Item_quantity,track_order.TID,track_order.DelID as del,customer.firstname,customer.lastname,pharm_orders.POID as Phid,customer.PhoneNumber,P_Bill,drugs.DName,track_order.Progress,pharm_orders.Payment from track_order inner join perm_cart on track_order.POID=perm_cart.POID inner join pharm_orders on perm_cart.POID=pharm_orders.POID inner join temp_cart on perm_cart.TC=temp_cart.TC inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD inner join drugs on pharm_drugs.DID=drugs.DID inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID inner join customer on pharm_orders.PatientID=customer.PatientID where pharm_drugs.PharmID=$id and Progress='Pending' order by track_order.POID";
$finale=mysqli_query($conn,$final);
while($finales=mysqli_fetch_assoc($finale)){
  $final_fn=$finales['firstname'];
  $final_ln=$finales['lastname'];
  $pd=$finales['pd'];

  
  $final_pr=$finales['Progress'];
  $final_py=$finales['Payment'];
$final_q=$finales['Item_quantity'];
$final_fe=$finales['P_Bill'];
  $final_id=$finales['Phid'];
  $final_num=$finales['PhoneNumber'];
  $final_name=$finales['DName'];
  $final_delid=$finales['del'];


   


  ?>
<div class="column">
        <div class='card  mb-4 shadow-sm '  style='background:white;height:135px;width:1150px;border-radius:2px;color:#cccccc'>
            <span style="width:90px;margin-left:20px;margin-top:15px;color:white;background:rgb(163, 83, 36)">
              <h1 style="margin-left:20px;margin-top:4px">29</h1>
              <h4 style="margin-left: 22px">Apr</h4>
            </span>

          <span style="margin-left:150px;margin-top:-99px;color:black">
          
              <img src="../../images/user.png" style="width:5%;margin-left:13px"alt="">
              <h6 style="margin-left:15px;font-size:10px">#Order JP<?php echo $final_id;?></h6>
              <h6><?php echo $final_num;?></h6>
              <h5><?php echo $final_fn." ".$final_ln; ?></h5>
            </span>

          <span style="margin-left:290px;margin-top:-130px">
                <ul style=" list-style-type: none">
                    <li><span style="color:black"><img style="width: 1.5%" src="../../images/oval.png"><?php echo $final_name;?></span> <span>x<?php echo $final_q;?></span></li>
                 
                  </ul>
              </span>
           
            <span style="margin-left:650px;margin-top:-50px">
                <ul style=" list-style-type: none">
                <?php 
                $tc=$finales['TID'];
                if($final_pr=="Pending"){
                  ?>
                <li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/><?php echo $final_pr; ?></li>
                <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                        <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                        <li><img src="https://img.icons8.com/ios-filled/20/e74c3c/passenger.png"/><?php echo "No Rider Assigned ";?></li>
                      </ul>
    
                  </span>
    
    
                  
                <span style="margin-left:970px;margin-top:-85px">
                    <a href="../pharmacist/update_in.php?accep=true&tc=<?php echo $tc;?>&od=<?php echo $final_id;?>&pt=<?php echo $pd;?>"  class="btn btn-success">ACCEPT</a>
                  </span>
                <?php
                }
            if($final_pr=="Processed"){
              ?>
            <li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/><?php echo $final_pr; ?></li>
            <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                    <li><img src="https://img.icons8.com/ios-filled/20/e74c3c/passenger.png"/><?php echo "No Rider Assigned ";?></li>
                  </ul>

              </span>


              
            
            <?php
            }
            if(isset($final_delid)){
            $dels="SELECT DelFname,DelLname from Delivery where DelID=$final_delid";
            $ds=mysqli_query($conn,$dels);
            $fin=mysqli_fetch_assoc($ds);
            $fin_delfn=$fin['DelFname'];
            $fin_deln=$fin['DelLname'];
            
            $final_del="<img src='https://img.icons8.com/ios-filled/20/26e07f/gender-neutral-user.png'/>".$fin_delfn." ".$fin_deln. " ";
            }
            if($final_pr=="Accepted"){
              ?>
            <li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/><?php echo $final_pr; ?></li>
            <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                    <li><?php echo $final_del;?></li>
                  </ul>

              </span>


              
            
            <?php
            }
            if($final_pr=="Picked"){
              ?>
            <li><img src="https://img.icons8.com/material-sharp/15/3498db/filled-circle.png"/><?php echo $final_pr; ?></li>
            <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                    <li><?php echo $final_del;?></li>
                  </ul>

              </span>


              
           
            <?php
            }
            if($final_pr=="Route"){
              ?>
            <li><img src="https://img.icons8.com/material-sharp/15/DBB634/filled-circle.png"/><?php echo $final_pr; ?></li>
            <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_py; ?></li>
                    <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/>Ghc <?php echo $final_fe; ?></li>
                    <li><?php echo $final_del;?></li>
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
<!-- end -->
</div>


<!-- Completed Orders-->
<div style="margin-left:-1%;margin-top:3%">
<h3>
Completed Orders
</h3>
<div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
  <div class="progress-bar bg" role="progressbar" style="width:100%;background:rgb(173, 93, 36)" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
</div>

<!-- orders -->
<!-- search by month -->

<!-- next -->
<div id="table"  style="margin-left:-2%;margin-top:2%;">
            <table id="example" class="table table-striped table-bordered" style="width:100%;background:white">
            <thead>
                <tr>
                <th scope="col">Order Number</th>
                <th scope="col">Order Date</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Item</th>
                <th scope="col">Progress</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Payment Mode</th>
                <th scope="col">Delivery</th>
               
                </tr>
            </thead>
            <tbody>
            <?php 
              $fina="SELECT Item_quantity,track_order.TID,track_order.DelID as del,customer.firstname,customer.lastname,pharm_orders.POID as Phid,customer.PhoneNumber,P_Bill,drugs.DName,track_order.Progress,pharm_orders.Payment,Order_Date from track_order inner join perm_cart on track_order.POID=perm_cart.POID inner join pharm_orders on perm_cart.POID=pharm_orders.POID inner join temp_cart on perm_cart.TC=temp_cart.TC inner join pharm_drugs on temp_cart.PHD=pharm_drugs.PHD inner join drugs on pharm_drugs.DID=drugs.DID inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID inner join customer on pharm_orders.PatientID=customer.PatientID where pharm_drugs.PharmID=$id and Progress!='Pending' order by track_order.POID";
              $final=mysqli_query($conn,$fina);
              while($finals=mysqli_fetch_assoc($final)){
                $fina_fn=$finals['firstname'];
                $fina_ln=$finals['lastname'];
              
                
                $fina_pr=$finals['Progress'];
                $fina_py=$finals['Payment'];
              $fina_q=$finals['Item_quantity'];
              $fina_fe=$finals['P_Bill'];
                $fina_id=$finals['Phid'];
                $fina_num=$finals['PhoneNumber'];
                $fina_name=$finals['DName'];
                $fina_delid=$finals['del'];
                $fina_da=$finals['Order_Date'];

                if(isset($fina_delid)){
                    $des="SELECT DelFname,DelLname from Delivery where DelID=$fina_delid";
                    $d=mysqli_query($conn,$des);
                    $fi=mysqli_fetch_assoc($d);
                    $fi_delfn=$fi['DelFname'];
                    $fi_deln=$fi['DelLname'];
                    
                    $fina_del=$fi_delfn." ".$fi_deln. " ";
                    }else{
                        $fina_del="No Rider";
                    }
                  
                if($fina_pr=="Processed"){

              



              ?>
                <tr >
               <?php 
              }
              else if($fina_pr=="Accepted"){

              
               ?>
                <tr class="table-warning" >
                <?php 
              }
                else if($fina_pr=="Picked"){
                  ?>

                <tr class="table-warning" >  
                <?php
                
                }
                else if($fina_pr=="Route"){
                    ?>
  
                  <tr class="table-warning" >  
                  <?php
                  
                  }
                  else if($fina_pr=="Delivered"){
                    ?>
  
                  <tr class="table-success" >  
                  <?php
                  
                  }
                
                ?>
                
                <td scope="row" contenteditable="false"><?php echo $fina_id; ?></td>
                <td contenteditable="false"><?php echo $fina_da;?></td>
                <td contenteditable="false"><?php echo $fina_fn."".$fina_ln;?></td>
                <td contenteditable="false"><?php echo $fina_num;?></td>
                <td contenteditable="false" ><?php echo $fina_name;?></td>
                <td contenteditable="false" ><?php echo $fina_pr;?></td>
                <td contenteditable="false" ><?php echo $fina_q;?></td>
                <td contenteditable="false" >Ghc <?php echo $fina_fe;?></td>
                <td contenteditable="false" ><?php echo $fina_py;?></td>
                <td contenteditable="false" ><?php echo $fina_del;?></td>

                </tr>
               
               
                
              <?php 
           
              }
              ?>
            </tbody>
            </table>

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


</script>

<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>

</html>