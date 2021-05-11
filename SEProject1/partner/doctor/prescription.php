<!-- page to send notifications for patient -->
<?php
session_start();
unset($_SESSION["docid"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
unset($_SESSION["username"]);
unset($_SESSION["dept"]);
header("Location:../doctor/doc_log.php");
?>