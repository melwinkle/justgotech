<!-- Home page for covid testing -->
<?php
require_once("../../database/connection.php");

session_start();

if (!isset($_SESSION['username'])) {
  echo "<script>location.href = './logout.php'</script>";
}


$username = $_SESSION['username'];
$query = "SELECT * from customer where username='$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$patient = $row['PatientID'];

$notif = "SELECT * from notification where PatientID=$patient and NRead='Unread'";
$noq = mysqli_query($conn, $notif);
if (mysqli_num_rows($noq) > 0) {
  $nn = mysqli_num_rows($noq);
} else {
  $nn = 0;
}
?>



<html>

<head>
  <title>COVID-19</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet" />
<link rel="stylesheet" href="./covid.css">
<link rel="stylesheet" href="./num.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body>

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



  <div class="navb" id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../images/justgo.png" alt="justgotech"> </span>
    <div style="float:right">

      <div class="dropdown" style="margin-left:63%">
        <button onclick="myFunction()" class="dropbtn" style="background:none;border:none;"><img style="width:25%" src="https://img.icons8.com/plasticine/100/000000/appointment-reminders.png" /><img style="width:10%" src="https://img.icons8.com/ios-filled/50/e74c3c/<?php echo $nn; ?>-circle.png" /></button>
        <div id="myDropdown" class="dropdown-content">
          <?php
          if ($nn > 0) {
            while ($num = mysqli_fetch_assoc($noq)) {
              $nt = $num['NID'];
              $mes = $num['NMessage'];
              $da = $num['NTime'];
              echo "<a href='../pharmacy/ph_suc.php?not&id=$nt&mprev=../pharmacy/ph_records.php'>$mes $da</a>";
            }
          } else {
            echo "<a >No Unread Notifications</a>";
          }
          ?>

        </div>
      </div>

      <span style="font-size:20px;cursor:pointer;margin-left:-7% " onclick="openP()"><?php echo $row['firstname'] . " " . $row['lastname']; ?><img style="width:5%" src="../../images/stethoscope.png" alt="profile"> </span>

    </div>

  </div>

  <div class="test" style="margin-left:25%;width:800px;margin-top:3%;">
    <h5 class="card-header"></h5>
    <div class="card-body" style="box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2), 0px 0px 50px rgba(0, 0, 0, 0.2); border:1px solid #3498db;background:#ffffff;height:800px;width:800px;border-radius:10px;color:rgb(4, 23, 75)">

      <h2 style="margin-top:10px;color:rgb(4, 23, 75);text-align:center" class="card-title">
        <strong>Account Information</strong>
      </h2><br>
      <div style="margin-left:8%">
        <form class="accountinfo" action="edit.php" method="post">
          <div class="form-group">
            <label class="header">First Name </label><br>
            <input style="border:1px solid #3498db;border-radius:5px;width:85%;height:40px" id="firstname" style="width:90%" type="text" name="fname" value="<?php echo $row['firstname'] ?>">
          </div>

          <div class="form-group">
            <label class="header">Last Name </label><br>
            <input style="border:1px solid #3498db;border-radius:5px;width:85%;height:40px" id="lastname" style="width:90%" type="text" name="lname" value="<?php echo $row['lastname'] ?>">

          </div>

          <div class="form-group">
            <label class="header">Email </label><br>
            <input style="border:1px solid #3498db;border-radius:5px;width:85%;height:40px" id="email" style="width:90%" type="text" name="email" value="<?php echo $row['email'] ?>" readonly>
          </div>

          <div class="form-group">
            <label class="header">Gender </label><br>
            <input style="border:1px solid #3498db;border-radius:5px;width:85%;height:40px" style="width:90%" type="text" name="gender" value="<?php echo $row['gender'] ?>">


          </div>

          <div class="form-group">
            <label class="header">Date of birth </label><br>
            <input style="border:1px solid #3498db;border-radius:5px;width:85%;height:40px" style="width:90%" type="text" name="dob" value="<?php echo $row['dob'] ?>">
          </div>


          <div class="form-group">
            <label class="header">Phone Number </label><br>
            <input style="border:1px solid #3498db;border-radius:5px;width:85%;height:40px" id="telephone" style="width:90%" type="text" name="phone" value="<?php echo $row['phonenumber'] ?>">
          </div>

          <div class="form-group">
            <label class="header">Nationality </label><br>

            <input style="border:1px solid #3498db;border-radius:5px;width:85%;height:40px" type="text" name="nationality" value="<?php echo $row['nationality'] ?>">
          </div>

          <button type="submit" class="btn btn-primary btn-lg" style="background: rgb(23, 79, 182); width: 50%;color:white; margin-left:15%" name="edit">Edit</button>

        </form>
      </div>



      <br>
    </div>
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
      document.getElementById("main").style.marginLeft = "0";
    }
  </script>
</body>
<footer>
  Copyright (c) JustGoTech 2021
</footer>

</html>