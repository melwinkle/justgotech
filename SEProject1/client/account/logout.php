<?php 

    session_start();
 
    // Destroy the session.
    if(isset($_SESSION['username'])){
        session_destroy();
        echo "<script>location.href='../../../index.php'</script>";
    }

    echo "<script>location.href='../Regforms/Login.php'</script>";
?>