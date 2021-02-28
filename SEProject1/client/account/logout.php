<?php 

    session_start();
 
    // Destroy the session.
    if(isset($_SESSION['username'])){
        session_destroy();
        echo "<script>location.href='../landingpage/index.html'</script>";
    }

    echo "<script>location.href='../regform/login.php'</script>";
?>