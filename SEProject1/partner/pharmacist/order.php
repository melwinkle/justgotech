<!-- page to manage order -->
<?php 

    session_start();
 
    // Destroy the session.
    if(isset($_SESSION['username'])){
        session_destroy();
        echo "<script>location.href='../pharmacist/pharm_log.php'</script>";
    }

?>