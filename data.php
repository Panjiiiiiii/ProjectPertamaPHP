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
    <title>Beli tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
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

        .navbar-toggler {
            right: -80px;
            align-items: end;
            color: #fff;
        }

        .navbar-toggler .navbar-toggler-icon {
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            height: 82vh;
        }

        .container h1 {
            text-align: center;
            font-size: 36px;
        }

        .row-cols-1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .custom-card {
            margin: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: #fff;
            border-radius: 5px;
        }

        .custom-card img {
            width: 100%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .custom-card .card-body {
            padding: 20px;
            text-align: center;
        }

        .custom-card .card-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .custom-card .card-text {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .custom-card button {
            width: 50%;
            padding: 20px 0;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }

        .footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .card-footer a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="banner">
        <div class="navbar navbar-expand-lg custom-navbar mb-3">
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
                        <a class="nav-link" href="data.php">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container py-1">
        <h1 class="mb-3">Ieau calme data's archives</h1>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-user fa-4x"></i>
                            </div>
                            <div class="col">
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
                                $sum_user = mysqli_query($conn, "SELECT COUNT(username) FROM user WHERE role = 'customer' ;");
                                $dt_sum = mysqli_fetch_array($sum_user);
                                ?>
                                <h3 class="display-3"><?= $dt_sum['COUNT(username)'] ?></h3>
                                <h6>Users</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="data_user.php" class="text-black-50">View details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-solid fa-briefcase fa-4x"></i>
                            </div>
                            <div class="col">
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
                                $sum_user = mysqli_query($conn, "SELECT COUNT(username) FROM user WHERE role = 'admin' ;");
                                $dt_sum = mysqli_fetch_array($sum_user);
                                ?>
                                <h3 class="display-3"><?= $dt_sum['COUNT(username)'] ?></h3>
                                <h6>Admins</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="data_admin.php" class="text-black-50">View details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-info text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-money-bill fa-4x"></i>
                            </div>
                            <div class="col">
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
                                $sum_user = mysqli_query($conn, "SELECT COUNT(id_pemesanan) FROM pemesanan;");
                                $dt_sum = mysqli_fetch_array($sum_user);
                                ?>
                                <h3 class="display-3"><?= $dt_sum['COUNT(id_pemesanan)'] ?></h3>
                                <h6>Transactions</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="data_transaksi.php" class="text-black-50">View details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-info text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fas fa-solid fa-ticket fa-4x"></i>
                            </div>
                            <div class="col">
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
                                $sum_user = mysqli_query($conn, "SELECT COUNT(id_tiket) FROM jenis_tiket;");
                                $dt_sum = mysqli_fetch_array($sum_user);
                                ?>
                                <h3 class="display-3"><?= $dt_sum['COUNT(id_tiket)'] ?></h3>
                                <h6>Tickets</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="data_tiket.php" class="text-black-50">View details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2023 Made with <i class="fas fa-heart"></i></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>