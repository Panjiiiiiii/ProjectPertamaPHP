<?php
    if($_GET['id']){
        $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
        $delete_user = mysqli_query($conn, "DELETE FROM user WHERE id = ".$_GET['id']." ");
        if($delete_user){
            echo "<script>alert('Data sukses dihapus'); location.href='data_user.php';</script>";
        }else{
            echo "<script>alert('Data gagal dihapus'); location.href='data_user.php';</script>";
        }
    }
?>