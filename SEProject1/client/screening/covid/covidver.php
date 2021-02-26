<!-- Screening page for covid testing -->
<?php 
require_once("/Applications/XAMPP/xamppfiles/htdocs/justgotech/SEProject1/database/database.php");
session_start();

if(isset($_GET["self"])){
  $person="Self";
}
else{
  $person="Other";
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
  <a href="#">Account Info</a>
  <a href="#">Tracker</a>
  <a href="covid.php">Virtual Screening</a>
  <a href="consultation.php">Consultation</a>


  <a href="logout.php">Log Out</a>
</div>


<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="/justgotech/SEProject1/images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()">User Name<img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>

    <div class="covidinfo">
   
  <h5 class="card-header">
  <a href="covidinfo.php" style="color:white">BACK</a>
  <img src="/justgotech/SEProject1/images/patient.png" alt="patient">
  </h5>
  <div class="card-body">

    <h2 class="card-title">
    COVID-19 SCREENING TOOL-<?php echo $person;?>
    </h2><br>
    <?php if($_SESSION["person"]=="Self"){
   
   echo " <p> How old are you?</p>";
    }
    else{

     echo"  <p> How old is she/him?</p>";

    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
 
    
  
    <?php 
    $sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'diseases' AND COLUMN_NAME = 'age_bracket' ";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
       $type=$row['COLUMN_TYPE'];

       $output = str_replace("enum('", "", $type);

// $output will now be: Equipment','Set','Show
       $output = str_replace("')", "", $output);

       // array $results contains the ENUM values
       $results = explode("','", $output);

       for($i = 0; $i < count($results); $i++) {
           echo " <a href='covidtest.php?person=$person&ageb=$results[$i]'  class='btn btn-primary btn-lg' style='background: white; color:rgb(23, 79, 182);margin-bottom: 5px'><input type='checkbox' name='ageb' id='ageb' value='$results[$i]' >$results[$i]</a><br>";
           
       }
        
    }
    ?>
    

    </form>
    
   
    
  
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