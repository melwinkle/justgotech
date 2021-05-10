<?php
session_start();
//variables will have to be replaced with the ones we used.
unset($_SESSION["sessionId1"]);
unset($_SESSION["sessionFname1"]);
unset($_SESSION["sessionLname1"]);
header("Location:C:/xampp/htdocs/jusgotest/justgotech/SEProject1/client/landingpage/index.html");
?>