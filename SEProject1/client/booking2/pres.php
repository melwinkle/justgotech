<!-- Home page for pharmacy -->
<?php
error_reporting(0);
require_once("../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../account/logout.php'</script>";
}

$username=$_SESSION['username'];

$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

$patient=$row['PatientID'];

$num="SELECT *,count(*) as c from diseases where PatientID=$patient";
$resnum=mysqli_query($conn,$num);

$book="SELECT *,count(*) as b from booking where PatientID=$patient";
$resbook=mysqli_query($conn,$book);
$rowbook=mysqli_fetch_assoc($resbook);

$dise="SELECT * from diseases where PatientID=$patient";
$redise=mysqli_query($conn,$dise);
$rowdise=mysqli_fetch_assoc($redise);


$count=0;
$countp=0;





	$notif="SELECT * from notification where PatientID=$patient and NRead='Unread'";
	$noq=mysqli_query($conn,$notif);
	if(mysqli_num_rows($noq)>0){
	  $nn=mysqli_num_rows($noq);
	 
	}else{
	  $nn=0;
	}
?>
<html>
<head>
<title>Booking</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="css/covid.css">
<link type="text/css" rel="stylesheet" href="./num.css" />
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


<body >

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/covid/cov.php">Virtual Screening</a>
  <a href="../booking2/bookmain.php">Consultation</a>
  <a href="../pharmacy/pharmacy_main.php">Pharmacy</a>

 
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
  <div style="float:right">
 
  <div class="dropdown" style="margin-left:59%">
  <button onclick="myFunction()" class="dropbtn" style="background:none;border:none;"><img style="width:25%"src="https://img.icons8.com/plasticine/100/000000/appointment-reminders.png"/><img style="width:10%"src="https://img.icons8.com/ios-filled/50/e74c3c/<?php echo $nn;?>-circle.png"/></button>
  <div id="myDropdown" class="dropdown-content">
    <?php
    if($nn>0){
     while($num=mysqli_fetch_assoc($noq)){
       $nt=$num['NID'];
       $mes=$num['NMessage'];
       $da=$num['NTime'];
       echo "<a href='../pharmacy/ph_suc.php?not&id=$nt&mprev=../pharmacy/ph_records.php'>$mes $da</a>";
     }
    }else{
      echo "<a >No Unread Notifications</a>";
    }
     ?>
   
  </div>
</div>
<span style="font-size:20px;cursor:pointer;margin-left:-7% " onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:5%" src="../../images/stethoscope.png" alt="profile"> </span>

</div>
<div class="hname" style="margin-left:45%;color:rgb(23, 79, 182)">
<h1>DIAGNOSIS</h1>
</div>

<div id="table" class="table-editable" style="width:1100px;margin-top:2%;margin-left:20%">
                    <table id="example" class="table table-striped table-bordered" style="background:white">
                        <thead>
                            <tr>
                                <th scope="col">Booking ID</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Doctor Number</th>
                                <th scope="col">Prescription</th>
                                <th scope="col">Diagnosis</th>
                             
                                
                            </tr>
                        </thead>
                        <tbody>
            <?php 
              $final="SELECT * from Prescriptions  inner join booking on Prescriptions.BID=booking.BID inner join Doctor on booking.Doctor=Doctor.DocID where booking.PatientID=$patient order by Prescriptions.PresID;";
              $finale=mysqli_query($conn,$final);
              if(mysqli_num_rows($finale)>0){
              while($finales=mysqli_fetch_assoc($finale)){
                $final_fn=$finales['DocFname'];
                $final_ln=$finales['DocLname'];
              $final_id=$finales['BID'];
              $pid=$finales['PresID'];
                
                $final_pre=$finales['Drugdesc'];
                $final_di=$finales['PresDesc'];
                $final_num=$finales['Docnum'];
               
                
                
              
                  if(isset($_GET['rid'])){
                    $id=$_GET['rid'];
                    if($id==$final_id){
                      echo '<tr class="table-success" >  ';

                    }else{
                      echo '<tr class="table-warning">  ';

                    }
      
                   
                  }else{
                    echo '<tr class="table-warning" >  ';
                  }


              ?>
              

               
                
                
                
                
                <td scope="row" contenteditable="false"><?php echo $final_id; ?></td>
                <td contenteditable="false"><?php echo $final_fn." ".$final_ln;?></td>
                <td contenteditable="false"><?php echo $final_num;?></td>
                <td contenteditable="false" id="md"><?php echo $final_pre;?></td>
                <td contenteditable="false" id="ed"><?php echo $final_di;?></td>
               
               
               
                </tr>
               
               
                
              <?php 
           
              }
            }
            else{
              echo "<tr class='table-danger'>
              <td colspan=5> No Diagnosis Completed</td>
              </tr>";
            }
              ?>
            </tbody>
            </table>

                </div>

   
<!-- <div class="imgchat" style="margin-left:85%;position:fixed">
<a href="../chatbot/bot.php?prev=../pharmacy/pharmacy_main.php"><img style="width:30%;margin-top:60%;margin-left:40%" src="../images/chat.png" alt="chatbot"></a>

</div> -->

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
 function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "75px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function mainP() {
    window.location.href ="../booking2/booking.php";
}
function purP() {
    window.location.href ="../booking2/viewbooking.php";
}
function presP() {
    window.location.href ="../booking2/pres.php";
}


</script>
<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
<script type="text/javascript">function add_chatinline(){var hccid=33480640;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline();</script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
  <div>Icons made by <a href="https://icon54.com/" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</footer>
</html>