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
    <title>Admin page</title>
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
        <div class="content">
            <h2><b>Welcome <?=$_SESSION['username']?> !!!</b></h2>
            <p>This is admin page for Swimming Pool<br>Press the button to see datas</p>
            <a href="data.php" class="custom-buy-ticket-link">See datas</a>
        </div>
    </div>


     <!-- <footer class="bg-dark text-white text-center p-1 fixed-bottom">
        <div class="container">
            <p>&copy; 2023 Made by <i class="fas fa-heart"></i> </p>
        </div>
    </footer> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    .banner{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)),url(./assets/swimming-pool-resort.jpg);
        background-size: cover;
        background-position: center;
        overflow-x: hidden;
        overflow-y: hidden;
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
    
    .content{
        width: 100%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
        color: #fff;
    }

    .content h2{
        font-size: 64px;
        margin-top: 80px;
    }

    .content p{
        margin: 20px auto;
        font-weight: 100;
        line-height: 25px;
    }

    button{
        width: 200px;
        padding: 15px;
        text-align: center;
        margin: 20px;
        border-radius: 50px;
        font-weight: lighter;
        border: none;
        color: #fff;
        background-color: transparent;
        border: solid 2px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        text-decoration: none;
    }

    .custom-buy-ticket-link {
        background: #00A9FF;
        color: #fff;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        transition: background 0.5s;
    }

    .custom-buy-ticket-link:hover {
        background: #0076B3; /* Change the background color on hover */
    }
</style>    