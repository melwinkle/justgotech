<!-- Home page for covid testing -->
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

$query1="SELECT * from covid ";
$results=mysqli_query($conn,$query1);


$query2="SELECT * from testing_centre";
$resultss=mysqli_query($conn,$query2);


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
  <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="../../../images/justgotech.png" alt="justgotech">
  <a href="../../account/accountinfo.php">Account Info</a>
  <a href="../../tracker/tracker.php">Tracker</a>
  <a href="../../screening/cov.php">Virtual Screening</a>
<a href="../booking2/bookmain.php">Consultation</a>

 
  <a href="../../account/logout.php">Log Out</a>
</div>

<div class="navb"id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="../../../images/justgo.png" alt="justgotech"> </span>
  
  <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>

</div>
   
  <div class="covid" style="height:800px">

  <div class="card-body">
  
    <h2 class="card-title">
    MALARIA SCREENING TOOL 
    </h2>

<form  action="covid_restart.php" method="post">
            <div class="form-group">
                                <label class="header">Who is the test for? </label><br>
                                <select style="border:1px solid #3498db;border-radius:5px;width:95%;height:40px" name="person" id="pre"  >
    <?php 
    $sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'diseases' AND COLUMN_NAME = 'Person' ";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
       $type=$row['COLUMN_TYPE'];
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
   
  </select>
  
                              
                            </div>

                            <div class="form-group">
                                <label class="header">Age Bracket </label><br>
                                <select style="border:1px solid #3498db;border-radius:5px;width:95%;height:40px" name="ageb" id="pre"  >
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
        echo " <option  value='$results[$i]'>$results[$i]</option><br>";
       } 
    }
    ?>
   
  </select>
                                
                            </div>

                            <div class="form-group">
                                <label class="header">Are you experiencing any of the following symptoms?</label><br>
                                <select style="border:1px solid #3498db;border-radius:5px;width:95%;height:40px" name="sym" id="pre"  >
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
                            </div>
                            
                            <div class="form-group">
                                <label class="header">Have you tested for Malaria recently? </label><br>
                                <select style="border:1px solid #3498db;border-radius:5px;width:95%;height:40px" name="test" id="pre"  >
    <?php 
    $sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'diseases' AND COLUMN_NAME = 'testing' ";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
       $type=$row['COLUMN_TYPE'];
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
      
   
  </select>

                             
                            </div>

                            <div class="form-group">
                                <label class="header">Do you have any pre-existing condition? </label><br>
                                                <select style="border:1px solid #3498db;border-radius:5px;width:95%;height:40px" name="pre" id="pre"  >
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
                <option value="None of the above">None of the above</option>
                </select>
                            </div>

                            
                            <div class="form-group">	
                                <label class="header">Have you been outside especially at night for a longer period? </label><br>
                                <select style="border:1px solid #3498db;border-radius:5px;width:95%;height:40px" name="con" id="pre"  >
                                <option  value='Yes'>Yes</option><br>
                                <option  value='No'>No</option><br>
      
   
  </select>
                            </div>
                            
                            <div class="form-group">  
                                <label class="header">What Region are you located in? </label><br>
                               
                                <select style="border:1px solid #3498db;border-radius:5px;width:95%;height:40px" name="reg" id="pre"  >
                                <?php 
    $sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'diseases' AND COLUMN_NAME = 'Region' ";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
       $type=$row['COLUMN_TYPE'];
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
    </select>
                            </div>

<button  type="submit" class="btn btn-primary btn-lg" style=" color:blue;width: 50%;background:white; margin-left:15%" name="scan">SCAN</button>

</form>
  
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
   <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> 
</footer>
</html>