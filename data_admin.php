<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data.php">Datas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <h4>Data admin</h4>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>ROLE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
            $qry_user = mysqli_query($conn, "SELECT * FROM user WHERE role = 'admin'");
            $no = 0;
            while ($dt_user = mysqli_fetch_array($qry_user)) {
                $no++ ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $dt_user['username'] ?></td>
                    <td><?= $dt_user['email'] ?></td>
                    <td><?= $dt_user['role'] ?></td>
                    <td> <a href="update_user.php?id=<?= $dt_user['id'] ?>" class="btn btn-success">Edit user</a> | <a href="delete_user.php?id=<?= $dt_user['id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete user</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

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
</style>