<!-- page to manage order -->
<?php 

    session_start();
 
    // Destroy the session.
    if(isset($_SESSION['username'])){
        session_destroy();
        echo "<script>location.href='../pharmacy/pharm_log.php'</script>";
    }

   
?>