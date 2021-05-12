<!-- Home page for covid testing -->
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



$up="SELECT * from booking where PatientID=$patient and STATUS!='COMPLETED'";
$upq=mysqli_query($conn,$up);
if(mysqli_num_rows($upq)>0){
  $upn=mysqli_num_rows($upq);
}else{
  $upn=0;
}

$cp="SELECT * from booking where PatientID=$patient and STATUS='COMPLETED'";
$cpq=mysqli_query($conn,$cp);
if(mysqli_num_rows($cpq)>0){
  $cpn=mysqli_num_rows($cpq);
}else{
  $cpn=0;
}
$php="SELECT * from temp_cart where PatientID=$patient and status='Basket'";
$pq=mysqli_query($conn,$php);
if(mysqli_num_rows($pq)>0){
  $pn=mysqli_num_rows($pq);
}else{
  $pn=0;
}
$bp="SELECT sum(P_Bill) as bill,count(*) as tot from pharm_orders where PatientID=$patient";
$bq=mysqli_query($conn,$bp);
if(mysqli_num_rows($bq)>0){
  $qn=mysqli_fetch_assoc($bq);
  $bn=$qn['bill'];
  $tot=$qn['tot'];
}else{
  $bn=0;
  $tot=0;
}
$tp="SELECT * from diseases where PatientID=$patient ";
$tq=mysqli_query($conn,$tp);
if(mysqli_num_rows($tq)>0){
  $tn=mysqli_num_rows($tq);

}else{
  $tn=0;
}

$pb="SELECT * from booking where PatientID=$patient ";
$qb=mysqli_query($conn,$pb);
if(mysqli_num_rows($qb)>0){
  $nb=mysqli_num_rows($qb);

}else{
  $nb=0;
}

$dp="SELECT * from diseases where PatientID=$patient and (Status='Exposed' or Status='Likely Exposed')";
$dq=mysqli_query($conn,$dp);
if(mysqli_num_rows($dq)>0){
  $dn=mysqli_num_rows($dq);

}else{
  $dn=0;
}

$lp="SELECT * from diseases where PatientID=$patient and (Status='Not exposed' or Status='Not Likely Exposed')";
$lq=mysqli_query($conn,$lp);
if(mysqli_num_rows($lq)>0){
  $ln=mysqli_num_rows($lq);

}else{
  $ln=0;
}

// calculating %
$p=0;
$p=($dn/$tn)*100;

$l=($ln/$tn)*100;


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
<title>COVID-19</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="./covid.css">
<link rel="stylesheet" href="./num.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
  <div style="float:right">
 
 <div class="dropdown" style="margin-left:59%">
  
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
 

<button onclick="myFunction()" class="dropbtn" style="background:none;border:none;"><img style="width:25%"src="https://img.icons8.com/plasticine/100/000000/appointment-reminders.png"/><img style="width:10%"src="https://img.icons8.com/ios-filled/50/e74c3c/<?php echo $nn;?>-circle.png"/></button>
  <span style="font-size:20px;cursor:pointer;margin-left:-7% " onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:5%" src="../../images/stethoscope.png" alt="profile"> </span>

  </div>
  
</div>


<div>
<div class="row" style="margin-left:15%">
   <div class="column"><div class="card  mb-4 shadow-sm " style="border:1px solid rgb(4, 23, 120);color:rgb(4, 23, 120);height:150px;width:350px;border-radius:5px;background: white"><h2 style="margin-top:10px;text-align:center"><img src="https://img.icons8.com/dotty/60/101550/test-tube.png"/><?php echo $tn;?></h2>
                                <h6 style="text-align:center">TOTAL TESTS</h6></div> </div>
    <div class="column"><div class="card  mb-4 shadow-sm " style="border:1px solid rgb(4, 23, 120);color:rgb(4, 23, 120);height:150px;width:350px;border-radius:5px;background: white"><h2 style="margin-top:10px;text-align:center"><img src="https://img.icons8.com/pastel-glyph/60/101550/money-circulation.png"/><?php echo $tot;?></h2>
                                <h6 style="text-align:center">TOTAL PURCHASE</h6></div> </div>
    <div class="column"><div class="card  mb-4 shadow-sm " style="border:1px solid rgb(4, 23, 120);color:rgb(4, 23, 120);height:150px;width:350px;border-radius:5px;background: white"><h2 style="margin-top:10px;text-align:center"><img src="https://img.icons8.com/wired/60/101550/medical-doctor.png"/><?php echo $nb;?></h2>
                                <h6 style="text-align:center">TOTAL CONSULTATION</h6></div> </div>
</div>
</div>
  


<div class="row" style="margin-left:14.5%">
<span style="margin-top:2.5%;margin-bottom:-75px"><h2 style="text-align:left;margin-left:35px">VIRTUAL SCREENING</h2></span> 
    <span style="margin-top:2%;margin-left:980px;margin-bottom:-60px"> <a href="../screening/results.php"  style="height:40px;width:90px; color:#3478db">View all></a></span>
  <div class="column" style="width:1200px"><div class="card  mb-4 shadow-sm " style="height:250px;color:white;background:#3478db;">
  
   
    <ul>
   
        <span >
        <h4 style="text-align:left;margin-top:50px;margin-left:-10px"> NO EXPOSURE <?php echo $l;?></h4>
        
            <div class="progress" style="width:900px;height: 20px;">
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $l;?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div></span>
            <span style="">
        <h4 style="text-align:left;margin-right:100px;margin-top:4%">EXPOSURE <?php echo $p;?></h4>
      
       <div class="progress" style="width:900px;height: 20px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $p;?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div></span>
    
    </ul>
    
  </div>
</div>


<span style="margin-top:1%;margin-bottom:-55px"><h2 style="text-align:left;margin-left:35px">CONSULTATION</h2></span> 
<span style="margin-top:1%;margin-left:980px;margin-bottom:-60px"> <a href="../booking2/viewbooking.php"  style="height:40px;width:90px; color:#3478db">View all></a></span>
  <div class="column"style="width:1200px"><div class="card  mb-4 shadow-sm " style="height:250px;color:white;background:#3478db;">

    <span style="margin-top:-5%;margin-left:980px"> <a href="../booking2/viewbooking.php"  style="height:40px;width:90px; color:white">View all></a></span>
   
    <span style="margin-top:50px;margin-left:5px"><h3 style="text-align:left">UPCOMING</h3></span>
    <span style="margin-top:-40px;margin-left:800px"><h1><?php echo $upn;?></h1></span>
    
    <span  style="margin-top:50px;margin-left:5px"><h3 style="text-align:left">COMPLETED</h3></span>
    <span style="margin-top:-55px;margin-left:800px"><h1><?php echo $cpn;?></h1></span>
  </div></div>
  <!--  -->

  <span style="margin-top:1%;margin-bottom:-55px"><h2 style="text-align:left;margin-left:35px">PHARMACY</h2></span> 
    <span style="margin-top:1%;margin-left:980px;margin-bottom:-60px"> <a href="../pharmacy/ph_cart.php"  style="height:40px;width:90px; color:#3478db">View all></a></span>
  <div class="column"style="width:1200px"><div class="card  mb-4 shadow-sm " style="height:250px;color:white;background:#3478db;">
  
    <span style="margin-top:50px;margin-left:5px"><h3 style="text-align:left">ITEMS IN CART</h3></span>
    <span style="margin-top:-40px;margin-left:800px"><h1><?php echo $pn;?></h1></span>


    <span  style="margin-top:50px;margin-left:5px"><h3 style="text-align:left">TOTAL BALANCE</h3></span>
    <span style="margin-top:-55px;margin-left:800px"><h1>GHC <?php echo $bn;?></h1></span>
    
  </div></div>
</div>





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
<!-- <script type="text/javascript">function add_chatinline(){var hccid=33480640;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline();</script> -->
</body>
<footer>
  Copyright (c) JustGoTech 2021
  <div>Icons made by <a href="https://icon54.com/" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
</footer>
</html>