<!DOCTYPE html>
<?php require_once("C:/xampp/htdocs/justgotech/justgotech/SEProject1/database/connection.php");?>
<?php
// Turn off all error reporting
error_reporting(0);
?>

<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome, Doctor, Patients and Appointments">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Docdashboard</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="dashboard.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.13.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/justgotech.png"
}</script>
    <meta property="og:title" content="Logout">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-3c0d"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="574" data-image-height="435">
          <img src="images/justgotech.png" class="u-logo-image u-logo-image-1" data-image-width="64">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="admin1.php" style="padding: 10px 20px;">Dashboard</a>

</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Logout.php" style="padding: 10px 20px;">Logout</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;">Add New Admin</a>

</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Logout.html" style="padding: 10px 20px;">Logout</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Add New Admin</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" data-image-width="5184" data-image-height="3456" id="sec-28c9">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-title u-text-1">Welcome, Doctor</h1>
        <p class="u-large-text u-text u-text-variant u-text-2">Over here you can see all the patients you are dealing with, which appointments you have and other information to help you.</p>
      </div>
    </section>
    
    <section class="u-align-center u-clearfix u-palette-1-dark-1 u-section-2" id="sec-dfc7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h4 class="u-text u-text-1">Appointments</h4>
                <p class="u-text u-text-2">You have a certain number of appointments scroll down to see them</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h4 class="u-text u-text-3">Patients</h4>
                <p class="u-text u-text-4">You have a certain number of patients, scroll below to see them.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
       //getting patient information from the booking section of the database.

        $bookings = [];
				$sql="select BID from booking LIMIT 4";
        $stmt= mysqli_stmt_init($conn);	

        if(!mysqli_stmt_prepare($stmt,$sql)){
          echo 'sql error1';
    
        exit();
      }else{
        
          mysqli_stmt_execute($stmt);
          $result= mysqli_stmt_get_result($stmt);
          while($row=mysqli_fetch_array($result)){
            array_push($bookings, $row['BID']);
          }
        }

        
        $sql = "Select * from booking where BID=".$bookings[0];
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          echo 'You have no current bookings';
          
          exit();
          }else{
            
             mysqli_stmt_execute($stmt);
             $result= mysqli_stmt_get_result($stmt);
             while($row=mysqli_fetch_array($result)){
               $PatientID1 = $row['PatientID'];
               $Appointment1 = $row['Appointment'];
               $AppTime1 = $row['ApTime'];
               $Reason1 = $row['Reason'];

             }
            }
        $sql = "Select username from Customer where PatientID =".$PatientID1;
        $stmt= mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'sql error2';
                    
                     exit();
                   }else{
                    mysqli_stmt_execute($stmt);
                    $result= mysqli_stmt_get_result($stmt);
                    while($row=mysqli_fetch_array($result)){
                      $username1= $row['username'];

                   }
                  }
            
        $sql = "Select * from booking where BID=".$bookings[1];
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          echo 'sql error3';
          
          exit();
          }else{
            
             mysqli_stmt_execute($stmt);
             $result= mysqli_stmt_get_result($stmt);
             while($row=mysqli_fetch_array($result)){
               $PatientID2 = $row['PatientID'];
               $Appointment2 = $row['Appointment'];
               $AppTime2 = $row['ApTime'];
               $Reason2 = $row['Reason'];

             }
            }
        $sql = "Select username from Customer where PatientID =".$PatientID2;
        $stmt= mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'sql error2';
                    
                     exit();
                   }else{
                    mysqli_stmt_execute($stmt);
                    $result= mysqli_stmt_get_result($stmt);
                    while($row=mysqli_fetch_array($result)){
                      $username2= $row['username'];

                   }
                  }
$sql = "Select * from booking where BID=".$bookings[2];
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          echo 'sql error3';
          
          exit();
          }else{
            
             mysqli_stmt_execute($stmt);
             $result= mysqli_stmt_get_result($stmt);
             while($row=mysqli_fetch_array($result)){
               $PatientID3 = $row['PatientID'];
               $Appointment3 = $row['Appointment'];
               $AppTime3 = $row['ApTime'];
               $Reason3 = $row['Reason'];

             }
            }
        $sql = "Select username from Customer where PatientID =".$PatientID3;
        $stmt= mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'sql error2';
                    
                     exit();
                   }else{
                    mysqli_stmt_execute($stmt);
                    $result= mysqli_stmt_get_result($stmt);
                    while($row=mysqli_fetch_array($result)){
                      $username3= $row['username'];
                   }
                  }
          
       $sql = "Select * from booking where BID=".$bookings[3];
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          echo 'sql error3';
          
          exit();
          }else{
            
             mysqli_stmt_execute($stmt);
             $result= mysqli_stmt_get_result($stmt);
             while($row=mysqli_fetch_array($result)){
               $PatientID4 = $row['PatientID'];
               $Appointment4 = $row['Appointment'];
               $AppTime4 = $row['ApTime'];
               $Reason4 = $row['Reason'];

             }
            }
        $sql = "Select username from Customer where PatientID =".$PatientID4;
        $stmt= mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'sql error2';
                    
                     exit();
                   }else{
                    mysqli_stmt_execute($stmt);
                    $result= mysqli_stmt_get_result($stmt);
                    while($row=mysqli_fetch_array($result)){
                      $username4= $row['username'];

                   }
                  }
     
				?>
    <section class="u-align-center u-clearfix u-section-3" id="sec-a813">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Patients and Appointments</h2>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            <tbody class="u-table-body">
              <tr style="height: 64px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Patient</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Reason for booking</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Appointment Date</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Appointment Time</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $username1;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $Reason1;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $Appointment1;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $AppTime1;?></td>
              </tr>
              <tr style="height: 65px;">
              <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $username2;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $Reason2;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $Appointment2;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $AppTime2;?></td>
              </tr>
              <tr style="height: 65px;">
              <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $username3;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $Reason3;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $Appointment3;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $AppTime3;?></td>
              </tr>
              <tr style="height: 65px;">
              <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $username3;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $Reason3;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $Appointment3;?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $AppTime3;?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0605"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Just Go 2021</p>
      </div></footer>
  </body>
</html>