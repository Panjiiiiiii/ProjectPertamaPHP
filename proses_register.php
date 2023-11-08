<?php
    if($_POST){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if (empty($username)) {
            echo "<script>alert('Username must be filled')</script>";
        } else if (empty($email)) {
            echo "<script>alert('Email must be filled')</script>"; 
        } else if (empty($password) && strlen($password) < 8) {
            echo "<script>alert('Password must be 8 characters length')</script>";
        } else if (empty($role)) {
            echo "<script>alert('Must fill the role')</script>";
        } else {
            $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
            $check = "SELECT * FROM user WHERE username = '$username'";
            $check_result = mysqli_query($conn, $check);
            if (mysqli_num_rows($check_result) > 0) {
                echo "<script>alert('Username telah digunakan, coba yang lainnya'); location.href='login.php';</script>";
            } else {
                $query = "INSERT INTO user (username, email, password, Role) VALUES ('$username', '$email', '".md5($password)."', '$role')";
                $insert = mysqli_query($conn, $query);
                echo "<script>alert('Membuat user berhasil'); location.href='login.php';</script>";                
            }
        }
    }
?>