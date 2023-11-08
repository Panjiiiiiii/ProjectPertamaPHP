<?php
    if($_POST){
        $id_user = $_POST['id'];
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
            $query = "UPDATE user SET username = '$username', email = '$email', password = '".md5($password)."', Role = '$role' WHERE id = '$id_user'";
            $insert = mysqli_query($conn, $query);
            echo "<script>alert('Membuat user berhasil'); location.href='data_user.php'</script>";                
        }
    }
