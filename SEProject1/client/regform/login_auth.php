<?php require_once("/Applications/XAMPP/xamppfiles/htdocs/justgotech/SEProject1/database/database.php");

    if(!isset($_SESSION['username'])){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5(sha1($_POST['password']));
            function success($username){
                $_SESSION['username'] = $username;
                echo "<script>location.href = 'https://www.google.com/'</script>";
            }

            $query = "SELECT * from customer WHERE `username` = '$username' and `email`='$email' and `userpassword` = '$password'";
            $sql = mysqli_query($conn, $query);
            $results = mysqli_num_rows($sql);

            if($results == 0){
                die("<script>alert('Login failed'); location.href = './index_0.php';</script>");
            }
            success($username);
            header("Location: justgotech/SEProject1/client/tracker/tracker.php");
        }
    }
?>