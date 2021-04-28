
<?php

require_once("../../database/connection.php");

session_start();

if(!isset($_SESSION['username'])){
	//echo "<script>location.href = 'viewbooking.php'</script>";
  }

//$username=$_SESSION['username'];
// $query="SELECT * from customer where username='$username'";
// $result=mysqli_query($conn,$query);
// $row=mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
<head>
<title>Just Go Tech Payment</title>

<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="main">
		<h1>Payment  Details</h1>
						<h2>Welcome to Just Go Tech Payment Portal </h2>
                        <div>
                            <button> <a href = "https://ravesandbox.flutterwave.com/pay/justgotechtrial" > PROCEED </a> </button>
           		        </div>
                    </body>
            </html>

                