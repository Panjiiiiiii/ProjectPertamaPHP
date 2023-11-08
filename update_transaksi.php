<?php
    if($_GET['id_pemesanan']){
        $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
        $update_transaksi = mysqli_query($conn, "UPDATE `detail_pemesanan` SET `status` = 'lunas' WHERE `id_pemesanan` = ".$_GET['id_pemesanan'].";");
        if($update_transaksi){
            echo "<script>alert('Tiket lunas'); location.href='data_transaksi.php';</script>";
        }else{
            echo "<script>alert('Tiket gagal dilunaskan'); location.href='data_transaksi.php';</script>";
        }
    }
?>