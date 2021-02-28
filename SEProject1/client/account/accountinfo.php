<!-- Home page for covid testing -->
<?php
    require_once("../../database/connection.php");

    session_start();

    if(!isset($_SESSION['username'])){
      echo "<script>location.href = './logout.php'</script>";
    }


    $username=$_SESSION['username'];
    $query="SELECT * from customer where username='$username'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body >

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../images/justgotech.png" alt="justgotech">
  <a href="../account/accountinfo.php">Account Info</a>
  <a href="../tracker/tracker.php">Tracker</a>
  <a href="../screening/covid/covid.php">Virtual Screening</a>
  <a href="../booking/Userbooking.php">Consultation</a>
 
  <a href="../account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>

<div class="test" style="margin-left:20%;width:60%">
  <h5 class="card-header"></h5>
  <div class="card-body" style="background:skyblue">
  
    <h2 class="card-title">
    Account Information
    </h2><br>

    <form class="accountinfo" >
<div class="form-group">
                                <label class="header">First Name </label><br>
                                <input style="width:90%" type="text" value="<?php echo $row['firstname']?>" >
                            </div>

                            <div class="form-group">
                                <label class="header">Last Name </label><br>
                                <input style="width:90%" type="text" value="<?php echo $row['lastname']?>">
                                
                            </div>

                            <div class="form-group">
                                <label class="header">Email </label><br>
                                <input style="width:90%" type="text"value="<?php echo $row['email']?>" >
                            </div>
                            
                            <div class="form-group">
                                <label class="header">Gender </label><br>
                                <input style="width:90%" type="text"  value="<?php echo $row['gender']?>" >

                             
                            </div>

                            <div class="form-group">
                                <label class="header">Date of birth </label><br>
                                <input  style="width:90%" type="text" value="<?php echo $row['dob']?>" >
                            </div>

                            
                            <div class="form-group">	
                                <label class="header">Phone Number </label><br>
                                <input style="width:90%" type="text"  value="<?php echo $row['phonenumber']?>"  >
                            </div>
                            
                            <div class="form-group">  
                                <label class="header">Nationality </label><br>
                               
                               <input style="width:90%" type="text" value="<?php echo $row['nationality']?>">
                            </div>

                            <a href="" class="btn btn-primary btn-lg" style="background: rgb(23, 79, 182); width: 50%;color:white; margin-left:15%">Edit</a>

</form>
    

    
<br>
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
</script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
</footer>
</html>