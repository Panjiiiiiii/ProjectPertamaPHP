<?php
    if($_GET['id_pemesanan']){
        $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
        $delete_transaksi = mysqli_query($conn, "DELETE FROM detail_pemesanan WHERE id_pemesanan = ".$_GET['id_pemesanan'].";");
        if($delete_transaksi){
            $delete_pemesanan = mysqli_query($conn, "DELETE FROM pemesanan WHERE id_pemesanan = ".$_GET['id_pemesanan'].";");
            echo "<script>alert('Tiket dihapus'); location.href='data_transaksi.php';</script>";
        }else{
            echo "<script>alert('Tiket gagal dihapus); location.href='data_transaksi.php';</script>";
        }
    }
?>