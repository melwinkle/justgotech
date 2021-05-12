<!-- dashboard for doctor -->

<!-- page for updating account  -->


<!-- page for account info -->

<?php 

session_start();
require_once("../../database/connection.php");
if(!isset($_SESSION['username'])){
  header("Location: ./doc_log.php" );
}


$username=$_SESSION['username'];
$id=$_SESSION['docid'];
$fn=$_SESSION['fname'];
$ln=$_SESSION['lname'];
$dn=$_SESSION['dept'];

$today=date('Y-m-d');
$sql="SELECT Docnum from Doctor where DocID=$id";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($query);
$number=$result['Docnum'];



$bk="SELECT * from booking where Doctor=$id and STATUS='PENDING'";
$bkq=mysqli_query($conn,$bk);
$number=mysqli_num_rows($bkq);



$bkd="SELECT * from booking where Doctor=$id and STATUS='COMPLETED'";
$bkdq=mysqli_query($conn,$bkd);
$db=mysqli_num_rows($bkdq);



$bkb="SELECT DISTINCT PatientID from booking where Doctor=$id";
$bkbq=mysqli_query($conn,$bkb);
$expg=mysqli_num_rows($bkbq);

?>


<!DOCTYPE html>
<head>
<title>JustGo Doctor</title>
 
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
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<body >


<div id="mySidenav" class="sidenav">
<h4 style="text-align:center;color:white">JustGo Doctor</h4>
<hr>
  <img style="width:50%;margin-left: 50px;" src="../../images/us.png" alt="justgotech">
  <a href="#"><h4 style="text-align:center"><?php echo $fn;echo $ln;?></h4></a>
  <hr>


  <a style="color:#cccccc" href="../doctor/daccount.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/delivery-scooter.png"/>Account</a>
  <hr>
  <a  href="../doctor/book.php"><img src="https://img.icons8.com/fluent-systems-filled/24/3498db/guest-male.png"/>Bookings</a>
  <hr>
  <a style="color:#cccccc"href="../doctor/diagnosis.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Diagnosis</a>
  <hr>
  <a style="color:#cccccc"href="../doctor/balance.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Balance</a>
  <hr>

  <a style="color:#cccccc"href="../doctor/prescription.php?logout"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>


<div style="margin-left:18%;margin-top:3%">
        <h3><?php echo date('d-M-Y');?></h3>
    <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
        <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div></div>
    </div>

   

<!-- account -->

<div class="main"style="margin-left:18%;margin-top:2%">

    <div class="row">
        <div class="col-sm-4">    
                         <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 70);height:150px;width:78%;border-radius:5px;color: white'>
                                 <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/><?php echo $number;?></h2>
                                 <h6 style="text-align:center">TOTAL INCOMING CONSULTATION</h6>
                            
                            </div>

                     </div>
<!-- next card -->
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 120);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/windows/64/ffffff/packaging.png"/><?php echo $db;?></h2>
                                <h6 style="text-align:center">TOTAL COMPLETED CONSULTATION</h6>

                            </div>
                
                    </div>
                    <!-- next card -->
                
                <div class="col-sm-4">    
                        <div class='card  mb-4 shadow-sm '  style='background:rgb(4, 23, 90);height:150px;width:78%;border-radius:5px;color: white'>
                                <h2 style="margin-top:10px;color: white;text-align:center"><img src="https://img.icons8.com/wired/64/ffffff/get-cash.png"/><?php echo $expg;?></h2>
                                <h6 style="text-align:center">TOTAL PATIENTS</h6>
                            </div>
                    
                    </div>
            </div>
    </div>

    
</div>
<!-- next -->
<div style="margin-left:18%;margin-top:3%">
             <h3>Latest Bookings</h3>
            <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
                </div>

                <div><a href="https://mylivechat.com/webconsole/">CHAT </a></div>
       


        <div class="row" style="margin-top: 2%">

<?php  

$final="SELECT * from booking  inner join customer on booking.PatientID=customer.PatientID where Doctor=$id order by booking.BID";
$finale=mysqli_query($conn,$final);
if(mysqli_num_rows($finale)>0){
while($finales=mysqli_fetch_assoc($finale)){
  $final_fn=$finales['firstname'];
  $final_ln=$finales['lastname'];
$final_id=$finales['BID'];
  
  $final_pr=$finales['STATUS'];
  $final_py=$finales['Department'];
$final_q=$finales['Appointment'];
//$final_fe=$finales['PaymentFee'];
  $final_r=$finales['Reason'];
  $final_in=$finales['Insurance'];
  $final_name=$finales['Person'];
  $final_delid=$finales['Insurance_Name'];
  $final_num=$finales['phonenumber'];


   


  ?>
<div class="column">
        <div class='card  mb-4 shadow-sm '  style='background:white;height:145px;width:1150px;border-radius:2px;color:#cccccc'>
            <span style="width:90px;margin-left:20px;margin-top:15px;color:white;background:rgb(4, 23, 75);;">
              <h1 style="margin-left:20px;margin-top:4px">29</h1>
              <h4 style="margin-left: 22px">Apr</h4>
            </span>

          <span style="margin-left:150px;margin-top:-99px;color:black">
          
              <img src="../../images/user.png" style="width:5%;margin-left:13px"alt="">
              <h6 style="margin-left:15px;font-size:10px">#Book JP<?php echo $final_id;?></h6>
              <h6><?php echo $final_num;?></h6>
              <h5><?php echo $final_fn." ".$final_ln; ?></h5>
            </span>

          <span style="margin-left:290px;margin-top:-130px">
                <ul style=" list-style-type: none">
                    <li><span style="color:black"><img style="width: 1.5%" src="../../images/oval.png">Department: <?php echo $final_py;?></span> </li>
                    <li><span style="color:black"><img style="width: 1.5%" src="../../images/oval.png">Reason: <?php echo $final_r;?></span> </li>

                  </ul>
              </span>
           
            <span style="margin-left:700px;margin-top:-60px">
                <ul style=" list-style-type: none">
                <?php 
                
                $book="SELECT PaymentFee from book_pay where BID=$final_id";
                $bookq=mysqli_query($conn,$book);
                $numb=mysqli_num_rows($bookq);
                if($numb>0){
                    $fin=mysqli_fetch_assoc($bookq);
                    $final_fe=$fin['PaymentFee'];
                }
                else{
                    $final_fe=0.0;
                }

                if($final_pr=="PENDING"){
                  ?>
                <li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/><?php echo $final_pr; ?></li>
                <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/>Insurance:<?php echo $final_in; ?></li>
                        <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/><?php echo $final_name; ?></li>
                        <li><img src="https://img.icons8.com/ios-filled/20/e74c3c/passenger.png"/>Ghc <?php echo $final_fe;?></li>
                        <?php if($final_in=="Yes"){
                           echo ' <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/>'.$final_delid.'</li>';
                            }else{
                                echo " ";
                            }
                            ?>
                      </ul>
    
                  </span>
    
    
                  
                <span style="margin-left:970px;margin-top:-85px">
                    <a href="../doctor/notify.php?accept=true&tc=<?php echo $final_id;?>"  class="btn btn-warning">ACCEPT</a>
                  </span>
                <?php
                }
            if($final_pr=="BOOKED"){
              ?>
            <li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/><?php echo $final_pr; ?></li>
                <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_in; ?></li>
                        <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/><?php echo $final_name; ?></li>
                        <li><img src="https://img.icons8.com/ios-filled/20/e74c3c/passenger.png"/>Ghc <?php echo $final_fe;?></li>
                        <?php if($final_in=="Yes"){
                           echo ' <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/>'.$final_delid.'</li>';
                            }else{
                                echo " ";
                            }
                            ?>
                      </ul>
    
                  </span>
    
    
                  
                <span style="margin-left:970px;margin-top:-85px">
                    <a href="../doctor/notify.php?complete=true&tc=<?php echo $final_id;?>"  class="btn btn-success">COMPLETE</a>
                  </span>


              
            
            <?php
            }
            
            if($final_pr=="COMPLETED"){
              ?>
          <li><img src="https://img.icons8.com/material-sharp/15/e67e22/filled-circle.png"/><?php echo $final_pr; ?></li>
                <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/><?php echo $final_in; ?></li>
                        <li><img src="https://img.icons8.com/material-outlined/20/cccccc/average.png"/><?php echo $final_name; ?></li>
                        <li><img src="https://img.icons8.com/ios-filled/20/e74c3c/passenger.png"/>Ghc <?php echo $final_fe;?></li>
                        <?php if($final_in=="Yes"){
                           echo ' <li><img src="https://img.icons8.com/material-outlined/18/cccccc/mobile-payment.png"/>'.$final_delid.'</li>';
                            }else{
                                echo " ";
                            }
                            ?>
                      </ul>
    
                  </span>
    
    
                  
               


              
            
            <?php
            }
        
        
           ?>
                    
          </div>
      </div>
      <?php
}
      }
      else{
        echo "<h2>NO CONSULTATION COMPLETED</h2>";
      }
      ?>
<!-- next -->
<!-- end -->
</div>
    </div>
<!-- next -->


<!-- completed -->
<div style="margin-left:18%;margin-top:3%">
             <h3>Latest Bookings</h3>
            <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  
                </div>
            <div id="table" class="table-editable" style="width:1300px;margin-top:2%;">
                    <table id="example" class="table table-striped table-bordered" style="background:white">
                        <thead>
                            <tr>
                                <th scope="col">Booking ID</th>
                                <th scope="col">Patient Name</th>
                                <th scope="col">Patient Number</th>
                                <th scope="col">Appointment Date</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Appointment Time</th>
                                <th scope="col">Person</th>
                                <th scope="col">Insurance</th>
                                <th scope="col">Price</th>
                                <th scope="col">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
            <?php 
              $final="SELECT * from booking  inner join customer on booking.PatientID=customer.PatientID inner join book_pay on booking.BID=book_pay.BID where Doctor=$id and STATUS='COMPLETED' ";
              $finale=mysqli_query($conn,$final);
              if(mysqli_num_rows($finale)>0){
              while($finales=mysqli_fetch_assoc($finale)){
                $final_fn=$finales['firstname'];
                $final_ln=$finales['lastname'];
              $final_id=$finales['BID'];
                
                $final_pr=$finales['STATUS'];
                $final_py=$finales['ApTime'];
              $final_q=$finales['Appointment'];
              $final_fe=$finales['PaymentFee'];
                $final_r=$finales['Reason'];
                $final_in=$finales['Insurance'];
                $final_name=$finales['Person'];
                $final_delid=$finales['Insurance_Name'];
                $final_num=$finales['phonenumber'];
               
                
                if($final_in=="Yes"){
                    $final_delid=$finales['Insurance_Name'];
                }else{
                    $final_delid="None";
                }
              



              ?>
              

                <tr class="table-success" >  
                
                
                
                <td scope="row" contenteditable="false"><?php echo $final_id; ?></td>
                <td  contenteditable="false"><?php echo $final_fn." ".$final_ln; ?></td>
                <td contenteditable="false"><?php echo $final_num;?></td>
                <td contenteditable="false"><?php echo $final_q;?></td>
                <td contenteditable="false" id="md"><?php echo $final_r;?></td>
                <td contenteditable="false" id="ed"><?php echo $final_py;?></td>
                <td contenteditable="false" id="Quantity"><?php echo $final_name;?></td>
                <td contenteditable="false" id="price"> <?php echo $final_delid;?></td>
                <td contenteditable="false" id="quer">GHC <?php echo $final_fe;?></td>
                <td contenteditable="false" id="ed" ><a href="../doctor/add_diag.php?edit&did=<?php echo $final_id;?>"  class="btn btn-danger btn-rounded btn-sm my-0">DIAGNOSE</a></td>
               
                </tr>
               
               
                
              <?php 
           
              }
            }
            else{
              echo "<tr class='table-danger'>
              <td colspan=9> No Completed Consultation</td>
              </tr>";
            }
              ?>
            </tbody>
            </table>

                </div>

            </div>
<!-- end -->
</div>




<?php
if(isset($_GET['updated'])){
  echo '<script>swal({
    title: "Good job!",
    text: "Item Updated Succesfully!",
    icon: "success",
    button: "Okay",
  });</script> ';
}
if(isset($_GET['changed'])){
  echo '<script>swal({
    title: "Good job!",
    text: "Password Updated!",
    icon: "success",
    button: "Okay",
  });</script> ';
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

function nec(){
  window.location.href="../delivery/doneder.php";
}

function upd(did){
     //let quant=document.getElementById("Quantity").innerHTML;
     window.location.href = "../doctor/add_diag.php?edit&did="+did;
    // window.location.href = "../pharmacist/update_in.php?edit&did=<?php echo $pid;?>&pid=<?php echo $id;?>&quan=" + quant; 
      
}

</script>
<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>

</html>