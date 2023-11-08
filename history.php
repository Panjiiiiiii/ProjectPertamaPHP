<?php 
    session_start();
    /*if($_SESSION['status_login'] = true){
        header('location: home.php');
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="banner">
        <div class="navbar navbar-expand-lg custom-navbar">
            <img src="./assets/rubber-ring_3049569.png" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tiket.php">Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    <h2 class="text-center my-4">Histori pembelian tiket</h2>
    <div class="container">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Tanggal Pembelian</th>
                    <th>Jenis tiket</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
                    $pemesanan = mysqli_query($conn, "SELECT * FROM detail_pemesanan JOIN pemesanan ON detail_pemesanan.id_pemesanan = pemesanan.id_pemesanan JOIN jenis_tiket ON pemesanan.id_tiket = jenis_tiket.id_tiket WHERE pemesanan.id_user = '".$_SESSION['id']."' ORDER BY tanggal_pemesanan DESC");
                    $no = 0;
                    while ($dt_pemesanan = mysqli_fetch_array($pemesanan)) { 
                    $no++;?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$dt_pemesanan['tanggal_pemesanan']?></td>
                        <td><?=$dt_pemesanan['Tiket']?></td>
                        <td><?=$dt_pemesanan['Harga']?></td>
                        <td><?=$dt_pemesanan['jumlah']?></td>
                        <td><?=$dt_pemesanan['status']?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

     <footer class="bg-dark text-white text-center p-1 fixed-bottom">
        <div class="container">
            <p>&copy; 2023 Made by <i class="fas fa-heart"></i> </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<style>
    body {
        background-color: #fff;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    .banner {
        width: 100%;
        background-color: #007BFF;
    }

    .custom-navbar {
        width: 85%;
        margin: auto;
        padding: 20px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo {
        cursor: pointer;
        width: 50px;
    }

    .custom-navbar ul {
        list-style: none;
        display: flex;
        align-items: center;
    }

    .navbar-toggler{
        right: -80px;
        align-items: end;
        color: #fff;
    }

    .navbar-toggler .navbar-toggler-icon{
        text-decoration: none;
    }

    .custom-navbar ul li {
        margin: 0 20px;
        position: relative;
    }

    .custom-navbar ul li a {
        text-decoration: none;
        color: #fff;
        transition: color 0.3s;
    }

    .custom-navbar ul li:hover a {
        color: #fff;
    }

    .container {
        margin-top: 40px;
    }

    table {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }

    th, td {
        text-align: center;
    }

    th {
        background-color: #007BFF;
    }

    th, td {
        padding: 10px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    footer {
        background-color: #343a40;
        color: #fff;
        text-align: center;
        padding: 10px 0;
    }
</style>