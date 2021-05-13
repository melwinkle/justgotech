<!-- Screening page for covid testing -->
<?php
error_reporting(0);

require_once("../../database/connection.php");

session_start();

$username=$_SESSION['username'];
if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../account/logout.php'</script>";
}

$username=$_SESSION['username'];
$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

$patient=$row['PatientID'];
$quey="SELECT * from diseases  where PatientID=$patient";
$resut=mysqli_query($conn,$quey);




?>
<html>
<head>
<title>SCREENING</title>
</head>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="covid.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<body >
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/cov.php">Virtual Screening</a>
  <a href="../booking2/bookmain.php">Consultation</a>
  <a href="../pharmacy/pharmacy_main.php">Pharmacy</a>

 
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -22%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="../../images/stethoscope.png" alt="profile"> </span>

</div>
<div id="table" class="table-editable" style="margin-left:17%;width:1100px;margin-top:2%;background:white">
            <table  id="example"class="table table-bordered table-responsive-md ">
            <thead>
                <tr>
                
                <th scope="col">Age Bracket</th>
                <th scope="col">Region</th>
                <th scope="col">Disease</th>
                <th scope="col">Test Status</th>
                <th scope="col">Symptoms</th>
                <th scope="col">Preconditions</th>
                <th scope="col">Health Status</th>
                <th scope="col">Time Completed</th>
                <th scope="col">Contact Status</th>
                <th scope="col">Exposure Status</th>
                </tr>
            </thead>
            <tbody>
       <?php
       if(mysqli_num_rows($resut)>0){
       while($rw=mysqli_fetch_assoc($resut)){
    

        
        $exp=$rw['Exposure'];

        if($rw['Status']=="Exposed"||$rw['Exposure']=='Yes'){
         echo " <tr class='table-danger'>";
        }
        else if($rw['Status']=="Likely Exposed"||$rw['Exposure']=='Yes'){
          echo " <tr class='table-warning'>";
        }
        else if($rw['Status']=="Not Likely Exposed" ||$rw['Exposure']=='No'){
          echo " <tr class='table-warning'>";
        }

        else{
          echo " <tr class='table-success'>";
        }
        ?>


       
  
 
     
  
     <td><?php echo $rw['age_bracket'];?></td>
     <td><?php echo $rw['disease_id'];?></td>
     <td><?php echo $rw['Region'];?></td>
     <td><?php echo $rw['testing'];?></td>
     <td><?php echo $rw['symptom'];?></td>
     <td><?php echo $rw['precon'];?></td>
     <td><?php echo $rw['Status']?></td>
     <td><?php echo$rw['Time'];?></td>
     <td><?php echo $rw['ConID'];?></td>
     <td><?php echo $rw['Exposure'];?></td>
     </tr>
     
     <?php
       }
       }else{
        echo "<tr class='table-danger'>
        <td colspan=10> No Purchases Made</td>
        </tr>";
       }
       
     
     ?>
    
     </tbody>
     </table>
     </div>
   </div>



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

<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>
<footer >
  Copyright (c) JustGoTech 2021 
</footer>
</html>