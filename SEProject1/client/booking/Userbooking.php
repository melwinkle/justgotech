
<!-- This file contains the appointment form a user can use to book a time with the Doctor on JustGo Tech website.
Author: Hephzibah Emereole & Aileen Akpalu
-->
<?php

error_reporting(0);
require_once("../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
  echo "<script>location.href = './logout.php'</script>";
}

$username=$_SESSION['username'];

$query="SELECT * from customer where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);


$PatientID=$row['PatientID'];

if($_POST['submit']){
    $person=$_POST['person'];
    $apdate=$_POST['appointmentdate'];
    $dept=$_POST['dept'];
    $reason=$_POST['visit'];
    $insure=$_POST['healthinsurance'];
    $inname=$_POST['insurance_name'];
    $inid=$_POST['insurance_id'];
    $doct=$_POST['doctor'];
    $time=$_POST['time'];
}

$quer="SELECT DocID from Doctor where DocFname='$doct'";
$resu=mysqli_query($conn,$quer);
$raw=mysqli_fetch_assoc($resu);


$doctor=$raw['DocID'];
$quey="INSERT INTO booking(Appointment,Department,Reason,Insurance,Insurance_Name,Insurance_ID,Doctor,ApTime,Person,PatientID) VALUES ('$apdate','$dept','$reason','$insure','$inname','$inid','$doctor','$time','$person','$PatientID')";
$resut=mysqli_query($conn,$quey);


if($resut){

    header("Location: tracker.php");
}
else{
  mysqli_error($conn);
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>JustGo Tech Appointment Form </title>
        <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
        <!-- Font Icon -->
        <link rel="stylesheet" href="./fonts/material-icon/css/material-design-iconic-font.min.css">
        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/covid.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="./js/main.js"></script>
    </head>

    <body>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <img style="width:50%;margin-left: 20%;background:rgb(23, 79, 182);" src="/justgotech/SEProject1/images/justgotech.png" alt="justgotech">
    <a href="/justgotech/SEProject1/client/account/accountinfo.php">Account Info</a>
    <a href="/justgotech/SEProject1/client/tracker/tracker.php">Tracker</a>
    <a href="/justgotech/SEProject1/client/screening/covid/covid.php">Virtual Screening</a>
    <a href="/justgotech/SEProject1/client/booking/Userbooking.php">Consultation</a>
  
   
    <a href="../account/logout.php">Log Out</a>
  </div>
  
  
  <div class="navb"id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img style="width:10%" src="/justgotech/SEProject1/images/justgo.png" alt="justgotech"> </span>
    
    <span style="font-size:20px;cursor:pointer; float:right; margin-right: -32%" onclick="openP()"><?php echo $row['firstname']." " .$row['lastname'];?><img style="width:10%" src="/justgotech/SEProject1/images/stethoscope.png" alt="profile"> </span>
  
  </div>
  
        <div class="appform">
            <section class="signup">

                <div class="container">
                    <div class="signup-content">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="signup-form" class="signup-form">
                            <h2 class="form-title">Appointment Form</h2>
                            <h4 class="error">Fields with * are required </h4>


                            <div class="form-group">
                                <label class="header">Patient <span class ="error">*</span></label>		
                                <select class="form-input" id ="person" name = "person">
                                    <option>Select</option>
                                    <?php 
    $sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'booking' AND COLUMN_NAME = 'Person' ";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
       $type=$row['COLUMN_TYPE'];

       $output = str_replace("enum('", "", $type);

// $output will now be: Equipment','Set','Show
       $output = str_replace("')", "", $output);

       // array $results contains the ENUM values
       $results = explode("','", $output);

       for($i = 0; $i < count($results); $i++) {
           echo "  <option name='person'value='$results[$i]'>$results[$i]</option><br>";
       } 
    }
    ?>
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label class="header">Appointment Date <span class ="error">*</span></label>
                                <input type="date" class="form-input" name="appointmentdate" id="appointmentdate"  placeholder="dd/mm/yyyy" required >
                            </div>

                        
                            <div class="form-group">
                                <label class="header">Department <span class ="error">*</span></label>		
                                <select class="form-input" id ="dept" name = "dept">
                                    <option>Select</option>
                                    <?php 
    $sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'booking' AND COLUMN_NAME = 'Department' ";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
       $type=$row['COLUMN_TYPE'];

       $output = str_replace("enum('", "", $type);

// $output will now be: Equipment','Set','Show
       $output = str_replace("')", "", $output);

       // array $results contains the ENUM values
       $results = explode("','", $output);

       for($i = 0; $i < count($results); $i++) {
           echo "  <option name='dept'value='$results[$i]'>$results[$i]</option><br>";
       } 
    }
    ?>
                                </select>
                            </div>

                            <div class="form-group"> 
                                <label class="header">Reason for booking <span class ="error">*</span></label>
                                <textarea  class= "form-input" name="visit" id="visit" placeholder="state your health challenge or reason for booking" required ></textarea>
                            </div>

                            <div class="form-group">
                                <label class="header">Health insurance <span class ="error">*</span></label>	<br>
                                <?php 
                                      $sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'booking' AND COLUMN_NAME = 'Insurance' ";
                                     $result=mysqli_query($conn,$sql);
                                      while($row = mysqli_fetch_array($result)) {
                                        $type=$row['COLUMN_TYPE'];

                                              $output = str_replace("enum('", "", $type);


                                            $output = str_replace("')", "", $output);


                                          $results = explode("','", $output);

       for($i = 0; $i < count($results); $i++) {
           echo "  
           <input class='healthinsurance' type='radio' id='$results[$i]' name='healthinsurance' value='$results[$i]' required>
           <label for='$results[$i]'>$results[$i]</label>
           <br>";
       } 
    }
    ?>	
                                                    </div>

                        <!--if the user clicks yes, input the name of the insurance and the ID -->

                        <div class="form-group">
                            <label for="otherField">Insurance Name</label>
                            <input type="text" class="form-input" name="insurance_name"  id="insurance_name" placeholder="insurance_name" required >
                        </div>
                        
                        <div class="form-group">
                            <label for="otherField">Insurance ID</label>
                            <input type="text" class="form-input" name="insurance_id"  id="insurance_id" placeholder="insurance_id" required >
                        </div>
                        
                        
                        <!--Optional if the user has a file to upload-->
                       <div class="insurance">
                            <form class="form-group">
                                <label for="myfile">Select image of insurance</label>
                                <input type="file" id="myfile" name="myfile"><br><br>
                                <!-- <input type="submit"> -->
                            </form>
                       </div>


                        <!--Doctor info, reads the list of doctors from the database and display the available of the doctor-->
                        <div class="form-group">
                            <label class="header">Doctor <span class ="error">*</span></label>
                            <select class="form-input" name="doctor" id="doctor"   placeholder="Doctor"  required>
                                <option>Select</option>
                                <?php 
                                $sql="SELECT * FROM Doctor ";
                                 $result=mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_array($result)) {
                                    $type=$row['DocFname'];

                                     $output = str_replace("enum('", "", $type);

                                     $output = str_replace("')", "", $output);


                                     $result = explode("','", $output);

                                          for($i = 0; $i < count($result); $i++) {
                                        echo "  <option name='doctor'value='$result[$i]'>Dr.$result[$i]</option><br>";
                                    
                                             } 
                                              }
                                            ?>
                            </select>
                        </div>
                        

                        <!--Based on the doctors available schedule -->
                        <div class="form-group">
                            <label class="header">Appointment Time <span class ="error">*</span></label>
                            <select class="form-input" name="time" id="time"   placeholder="Time available"  required>
                            <option >Select</option>

                            <?php 

                                $sql="SELECT Time_Available FROM Doctor_Time ";
                                 $result=mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_array($result)) {
                                    $type=$row['Time_Available'];

                                     $output = str_replace("enum('", "", $type);

                                     $output = str_replace("')", "", $output);


                                     $results = explode("','", $output);

                                          for($i = 0; $i < count($results); $i++) {
                                        echo "  <option name='time' value='$results[$i]'>$results[$i]</option>";
                            
                                             } 
                                              }
                                            ?>	
                                              </select>
                            
                        </div>
                                          

                                            <div>
                            <button  class="btn btn-primary btn-lg"style='background: rgb(23, 79, 182); color:white;margin-top: 10px;margin-left:25%;width:50%' name="submit" type="submit" >Book Now</buttom>
                  </div>
                   
                    </form>
                    </div>
                </div>
            </section>
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
        <footer class="copyright">© Software Engineering team. All Rights Reserved | Edited by Group 7</footer>
    </body>
</html>



<!-- <script>
<script type="text/javascript" src ="./js/bookvalidator.js">  </script>
// javascript code to dispay other details when a user clicks on 'yes' in the health insurance question. //still under development 
$("#seeAnotherField").change(function() {
  if ($(this).val() == "yes") {
    $('#otherFieldDiv').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");

</script> -->
