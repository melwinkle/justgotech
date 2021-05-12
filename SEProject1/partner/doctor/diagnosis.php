<!-- page for giving full account of consultation -->
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

$sql="SELECT Docnum from Doctor where DocID=$id";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($query);
$number=$result['Docnum'];

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
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
    <div id="table" class="table-editable" style="width:1300px;margin-top:2%;">
                    <table id="example" class="table table-striped table-bordered" style="background:white">
                        <thead>
                            <tr>
                                <th scope="col">Booking ID</th>
                                <th scope="col">Patient Name</th>
                                <th scope="col">Patient Number</th>
                                <th scope="col">Diagnosis</th>
                                <th scope="col">Prescription</th>
                                <th scope="col">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
            <?php 
              $final="SELECT * from Prescriptions  inner join booking on Prescriptions.BID=booking.BID inner join customer on booking.PatientID=customer.PatientID where Prescriptions.DocID=$id order by Prescriptions.PresID;";
              $finale=mysqli_query($conn,$final);
              if(mysqli_num_rows($finale)>0){
              while($finales=mysqli_fetch_assoc($finale)){
                $final_fn=$finales['firstname'];
                $final_ln=$finales['lastname'];
              $final_id=$finales['BID'];
              $pid=$finales['PresID'];
                
                $final_pre=$finales['Drugdesc'];
                $final_di=$finales['PresDesc'];
                $final_num=$finales['phonenumber'];
               
                
                
              



              ?>
              

                <tr class="table-success" >  
                
                
                
                
                <td scope="row" contenteditable="false"><?php echo $final_id; ?></td>
                <td contenteditable="false"><?php echo $final_fn." ".$final_ln;?></td>
                <td contenteditable="false"><?php echo $final_num;?></td>
                <td contenteditable="false" id="md"><?php echo $final_di;?></td>
                <td contenteditable="false" id="ed"><?php echo $final_pre;?></td>
                <td contenteditable="false" id="ed" ><button onclick="upd('<?php echo $pid;?>')" class="btn btn-warning btn-rounded btn-sm my-0">UPDATE</button></td>
               
               
                </tr>
               
               
                
              <?php 
           
              }
            }
            else{
              echo "<tr class='table-danger'>
              <td colspan=6> No Diagnosis Completed</td>
              </tr>";
            }
              ?>
            </tbody>
            </table>

                </div>

    </div>
</div>
<!-- next -->

<!-- next -->

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
     window.location.href = "../doctor/update_di.php?edit&did="+did;
    // window.location.href = "../pharmacist/update_in.php?edit&did=<?php echo $pid;?>&pid=<?php echo $id;?>&quan=" + quant; 
      
}
</script>
<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>

</html>