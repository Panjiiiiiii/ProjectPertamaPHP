<?php 
    if ($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username)) {
            echo "<script>alert('Username must be filled')</script>";
        } else if (empty($password)) {
            echo "<script>alert('Email must be filled')</script>"; 
        } else {
            $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
            $login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '".md5($password)."' ");
            if(mysqli_num_rows($login) > 0){
                $dt_login = mysqli_fetch_array($login);
                session_start();
                $_SESSION['id'] = $dt_login['id'];
                $_SESSION['username'] = $dt_login['username'];
                $_SESSION['role'] = $dt_login['role'];
                $_SESSION['status_login']= true;
                if($_SESSION['role'] == "admin"){
                    header("location: index.php");
                }else{
                    header("location: home.php");
                }
                
                exit();
            } else {
                echo "<script>alert('Email or password is wrong'); location.href='login.php';</script>"; 
            }
        }
    }
?>