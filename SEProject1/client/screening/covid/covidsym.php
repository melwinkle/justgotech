<!-- Screening page for covid testing -->
<?php 
require_once("/Applications/XAMPP/xamppfiles/htdocs/justgotech/SEProject1/database/database.php");
session_start(); 
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
   echo "<a href='covidtest.php?person=$person&ageb=$age&test=$test' style='color:white'>BACK</a>"?>
  </h5>
  <div class="card-body" >

    <h2 class="card-title">
    COVID-19 SCREENING TOOL 
    </h2><br>
  
    <?php if($person=="self"){
   
   echo " <p> Have you experienced any of the symptoms below? Select all that apply</p>";
    }
    else{

     echo"  <p> Have they experienced any of the symptoms below? Select all that apply</p>";

    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; echo '?person='.$person.'&ageb='.$age.'&test='.$test.'';?>" method="post">
    <select name="sym" id="sym" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" multiple>
   

    <?php 
    $sql="SELECT Sname FROM symptoms ";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
       $type=$row['Sname'];

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
    <option value="None of the above">None of the above</option>
     </select>
     <button class='btn btn-primary btn-lg' style='background: white; color:rgb(23, 79, 182);margin-bottom: 5px' name='submit' type='submit' value='submit'>NEXT</button>
    
    
    </form>
    
    <?php
    if(isset($_POST['submit'])){
      $sym=$_POST['sym'];

      header("Location: covidpre.php?person=$person&ageb=$age&test=$test&sym=$sym");
    }

    ?>
 
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

</body>
</html>