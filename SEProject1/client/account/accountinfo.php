<!-- Home page for covid testing -->
<?php



session_start();
require_once("/Applications/XAMPP/xamppfiles/htdocs/justgotech/SEProject1/database/database.php");

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
<link rel="stylesheet" href="covid.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body >

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="/justgotech/SEProject1/images/justgotech.png" alt="justgotech">
  <a href="/justgotech/SEProject1/client/account/accountinfo.php">Account Info</a>
  <a href="/justgotech/SEProject1/client/tracker/tracker.php">Tracker</a>
  <a href="/justgotech/SEProject1/client/screening/covid/covid.php">Virtual Screening</a>
  <a href="/justgotech/SEProject1/client/booking/Userbooking.php">Consultation</a>

 
  <a href="logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="/justgotech/SEProject1/images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>

<form action="" method="post">
<div class="form-group">
                                <label class="header">First Name <span class ="error">*</span></label>
                                <input type="text" class="form-input" pattern="[a-zA-Z]+" name="fname" id="name" placeholder="First Name" required >
                            </div>

                            <div class="form-group">
                                <label class="header">Last Name <span class ="error">*</span></label>
                                <input type="text" class="form-input" name="lname"  pattern="[a-zA-Z]+" id="lname" placeholder="Last Name" required>
                                
                            </div>

                            <div class="form-group">
                                <label class="header">Email <span class ="error">*</span></label>
                                <input type="email" class="form-input" name="email" id="email"  pattern= "^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Your Email" required >
                            </div>
                            
                            <div class="form-group">
                                <label class="header">Gender <span class ="error">*</span></label>
                                <input type="radio" id="Male" name="gender" value="Male" required>

                                <label for="Male">Male</label>
                                    <input type="radio" id="Female" name="gender" value="Female">
                                <label for="female">Female</label><br>
                            </div>

                            <div class="form-group">
                                <label class="header">Date of birth <span class ="error">*</span></label>
                                <input type="date" class="form-input" name="dob" id="dob"  placeholder="dd/mm/yyyy" required >
                            </div>

                            
                            <div class="form-group">	
                                <label class="header">Phone Number <span class ="error">*</span></label>
                                <input type="number" class="form-input" name="phonenumber"  id="phoneno" placeholder="Phone Number" required >
                            </div>
                            
                            <div class="form-group">  <!-- country Api for international students in Ghana-->
                                <label class="header">Nationality <span class ="error">*</span></label>
                                <!-- <input type="text" class="form-input" name="Nationality" id="Nationality"  placeholder="Nationality" required > -->
                                <select name="nationality" class="form-input" id="Nationality">
                                    <option value="">Select Nationality</option>
                                </select>
                            </div>
</form>
   
  
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
   <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> 
</footer>
</html>