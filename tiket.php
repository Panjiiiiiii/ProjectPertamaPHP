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
    <div class="container py-1">
        <h1>Tiket renang</h1>
        <div class="row row-cols-1">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
            $qry_tiket = mysqli_query($conn, "SELECT * FROM jenis_tiket");

            while ($dt_tiket = mysqli_fetch_array($qry_tiket)) {
            ?>
                <div class="col-sm-4">
                    <div class="custom-card">
                        <img src="foto_tiket/<?= $dt_tiket['Foto'] ?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $dt_tiket['Tiket'] ?></h5>
                            <p class="card-text"><?= $dt_tiket['Deskripsi'] ?></p>
                        </div>
                        <div class="d-flex justify-content-around">
                            <p><b>Rp. <?= $dt_tiket['Harga'] ?> ,00</b></p>
                            <button onclick="location.href='beli_tiket.php?id_tiket=<?= $dt_tiket['id_tiket'] ?>'" class="btn btn-success">Beli</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Made with <i class="fas fa-heart"></i></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>