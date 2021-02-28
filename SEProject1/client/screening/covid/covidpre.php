<!-- Screening page for covid testing -->
<?php 

require_once("../../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = '../account/logout.php'</script>";
}


$username=$_SESSION['username'];

$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
if(isset($_GET["person"])){
  $person=$_GET["person"];
}
if(isset($_GET["ageb"])){
  $age=$_GET["ageb"];
}
  if(isset($_GET["test"])){
    $test=$_GET["test"];
}
if(isset($_GET["sym"])){
  $sym=$_GET["sym"];
}



?>
<html>
<head>
<title>COVID-19</title>
</head>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="covid.css">

<body >
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="/justgotech/SEProject1/images/justgotech.png" alt="justgotech">
  <a href="/justgotech/SEProject1/client/account/accountinfo.php">Account Info</a>
  <a href="/justgotech/SEProject1/client/tracker/tracker.php">Tracker</a>
  <a href="/justgotech/SEProject1/client/screening/covid/covid.php">Virtual Screening</a>
  <a href="/justgotech/SEProject1/client/booking/Userbooking.php">Consultation</a>

 
  <a href="/justgotech/SEProject1/client/account/logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="/justgotech/SEProject1/images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>

    <div class="covidinfoo">
   
  <h5 class="card-header">
  <?php
   echo "<a href='covidsym.php?person=$person&ageb=$age&test=$test&sym=$sym' style='color:white'>BACK</a>"?>
  </h5>
  <div class="card-body" >

    <h2 class="card-title">
    COVID-19 SCREENING TOOL 
    </h2><br>
   
    
    
    <?php if($person=="self"){
   
   echo " <p> Do you have any of the following? Select all that apply</p>";
    }
    else{

     echo"  <p> Do they have any of the following? Select all that apply</p>";

    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; echo '?person='.$person.'&ageb='.$age.'&test='.$test.'&sym='.$sym.'';?>" method="post">
    <select name="pre" id="pre" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" multiple>
    <?php 
    $sql="SELECT PName FROM preconditions ";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
       $type=$row['PName'];

       $output = str_replace("enum('", "", $type);

// $output will now be: Equipment','Set','Show
       $output = str_replace("')", "", $output);

       // array $results contains the ENUM values
       $results = explode("','", $output);

       for($i = 0; $i < count($results); $i++) {
        echo " <option  value='$results[$i]'>$results[$i]</option><br>";
       } 
    }
    ?>
    <option  value='None of the above'>None of the above</option><br>
  </select>
  <button class='btn btn-primary btn-lg' style='background: white; color:rgb(23, 79, 182);margin-bottom: 5px' name='submit' type='submit' value='submit'>NEXT</button>

    </form>
    
  </div>
</div>


<?php
    if(isset($_POST['submit'])){
      $pre=$_POST['pre'];

      header("Location: covidcon.php?person=$person&ageb=$age&test=$test&sym=$sym&pre=$pre");
    }

    ?>
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
</html>