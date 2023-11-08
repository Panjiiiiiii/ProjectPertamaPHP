<?php
    session_start();
    if($_POST){
        $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
        $qry_tiket = mysqli_query($conn, "SELECT * FROM jenis_tiket WHERE id_tiket = '".$_POST['id_tiket']."'");
        $dt_tiket = mysqli_fetch_array($qry_tiket);
        $_SESSION['buy'][] = array (
            'id_tiket' => $dt_tiket['id_tiket'],
            'Tiket' => $dt_tiket['Tiket'],
            'Qty' => $_POST['qty']
        );

        $pembelian = mysqli_query($conn,"INSERT INTO `pemesanan`(`id_user`, `id_tiket`, `jumlah`) VALUES ('".$_SESSION['id']."', '".$_POST['id_tiket']."', '".$_POST['qty']."')");
        if($pembelian){
            //$histori = mysqli_query($conn, "SELECT * FROM pemesanan");
            //$dt_histori = mysqli_fetch_array($histori);
            $id_pemesanan = mysqli_insert_id($conn);
            $tgl_pemesanan = date('Y-m-d');
            $total_harga = $_POST['qty'] * $dt_tiket['Harga'];
            $insert_detail = mysqli_query($conn, "INSERT INTO detail_pemesanan (id_pemesanan, total_harga, tanggal_pemesanan, status) VALUES (". $id_pemesanan /*$dt_histori['id_pemesanan']*/.",".$total_harga.",'".$tgl_pemesanan."', 'belum_lunas')");
            echo "<script>alert('Proses pembelian berhasil'); location.href= 'history.php';</script>";
        }else{
            echo"<script>alert('Pembelian gagal')</script>";
        }
        //include "proses_login.php";
    }
?>