<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-- Isi gambar atau teks yang Anda inginkan di sini -->
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Register here</header>
                        <form action="proses_register.php" method="post">
                            <div class="input-field">
                                <input type="text" class="input" name="username" placeholder="Username" required autocomplete="off">
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="email" placeholder="Email" required autocomplete="off">
                            </div>
                            <div class="input-field">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="align-content-lg-start">
                                <label class="form-label"><b>Logged as</b></label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="admin" name="role" value="admin">
                                    <label for="admin" class="form-check-label">Admin</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" id="member" name="role" value="customer">
                                    <label for="member" class="form-check-label">Customer</label>
                                </div>
                            </div>
                            <div class="input-field">
                                <button type="submit" class="Submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>

<style>
    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #f0f0f0;
    }

    .wrapper {
        display: flex;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    .container.main {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2);
        padding: 30px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 550px;
    }

    .side-image {
        background-image: url('./assets/aerial-view-pool.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 10px 0 0 10px;
        flex: 1;
        height: 100%;
    }

    .side-image .text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .side-image .text p {
        font-size: 24px;
        font-weight: bold;
        color: #fff;
    }

    .right {
        flex: 1;
        padding: 20px;
    }

    .input-box {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
    }

    .input-box header {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .input-field {
        position: relative;
        margin-bottom: 20px;
    }

    .input-field label {
        position: absolute;
        top: 8px;
        left: 15px;
        color: #555;
        transition: all 0.2s;
        pointer-events: none;
    }

    .input-field .input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .input-field .input:focus + label,
    .input-field .input:valid + label {
        top: -12px;
        left: 10px;
        font-size: 14px;
        color: #007bff;
    }

    .Submit {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .register a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .register a:hover {
        text-decoration: underline;
    }

</style>