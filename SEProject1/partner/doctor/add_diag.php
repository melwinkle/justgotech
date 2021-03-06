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
  

  if(isset($_GET['edit'])){
      $bd=$_GET['did'];

      $bkd="SELECT firstname,lastname from booking inner join customer on booking.PatientID=customer.PatientID where BID=$bd ";
  $bkdq=mysqli_query($conn,$bkd);
  $db=mysqli_fetch_assoc($bkdq);
  $fn=$db['firstname'];
  $ln=$db['lastname'];
  }

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
<link rel="stylesheet" href="pharm.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
<body >


<div id="mySidenav" class="sidenav">
<h4 style="text-align:center;color:white">JustGo Doctor</h4>
<hr>
  <img style="width:50%;margin-left: 50px;" src="../../images/us.png" alt="justgotech">
  <a href="#"><h4 style="text-align:center"><?php echo $fn;echo $ln;?></h4></a>
  <hr>
  <a style="color:#cccccc" href="../doctor/dashdoc.php"><img src="https://img.icons8.com/material/24/cccccc/dashboard-layout.png"/>Dashboard</a>
  <hr>
  <a href="../doctor/daccount.php"><img src="https://img.icons8.com/fluent-systems-filled/24/3498db/delivery-scooter.png"/>Account</a>
  <hr>
  <a style="color:#cccccc" href="../doctor/book.php"><img src="https://img.icons8.com/fluent-systems-filled/24/cccccc/guest-male.png"/>Bookings</a>
  <hr>
  <a style="color:#cccccc"href="../doctor/diagnosis.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Diagnosis</a>
  <hr>
  <a style="color:#cccccc"href="../doctor/prescription.php"><img src="https://img.icons8.com/wired/24/cccccc/get-cash.png"/>Balance</a>
  <hr>

  <a style="color:#cccccc"href="../doctor/prescription.php?logout"><img src="https://img.icons8.com/material-sharp/24/e67e22/settings.png"/>Log Out</a>
</div>


<div style="margin-left:18%;margin-top:3%">
        <h3><?php echo date('d-M-Y');?></h3>
    <div class="progress" style="border-radius:5px;width:10%;height: 10px;margin-top:10px">
        <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div></div>
    </div>

   

<!-- account -->

<div class="main"style="margin-left:30%;margin-top:5%">
<div style="margin-left:55%;color:rgb(4, 23, 75)">
<a style="color:rgb(4, 23, 75);font-size:18pt"href="../doctor/book.php"><img src="https://img.icons8.com/metro/26/3498db/lock-2.png"/>BACK</a>
</div>
    <div class="row">
        <div class="col-sm-4">    
             <div class='card  mb-4 shadow-sm '  style='background:#ffffff;height:600px;width:250%;border-radius:10px;color:rgb(4, 23, 75)'>
                    <h2 style="margin-top:10px;color:rgb(4, 23, 75);text-align:center"><img src="https://img.icons8.com/fluent-systems-filled/48/3498db/guest-male.png"/>NEW DIAGNOSIS</h2>
               

                    <div style="margin-left:10%;margin-top:2%">
                       
                      <form action="notify.php?bc=<?php echo $bd;?>&tc=<?php echo $id;?>" method="post">
                        <label for="user">Patient Name</label><br>
                        <input style="border:1px solid #3498db;border-radius:5px;width:93%;height:40px"type="text" name="newp" id="un" value="<?php echo $fn.' '.$ln;?>" readonly><br>



                        <label for="lname">Diagnosis</label><br>
                        <textarea  style="border:1px solid #3498db;border-radius:5px;" name="pre" id="pre" cols="130" rows="5"></textarea><br>
                        

                       
                        <label for="lname">Prescription</label><br>
                        <textarea  style="border:1px solid #3498db;border-radius:5px;" name="drug" id="pre" cols="130" rows="5"></textarea><br>
                        
                    

                        <button name="diag"type="submit" style="margin-top:5%;margin-left:20%;width:40%;height:20%;background:rgb(4, 23, 75)"class="btn btn-primary">DIAGNOSE</a>
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


</script>
</body>

</html>