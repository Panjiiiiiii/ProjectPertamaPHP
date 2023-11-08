<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'kolam_renang');
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $qry_user = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
            $dt_user = mysqli_fetch_array($qry_user);
        } else {
            // Handle kesalahan jika 'id' tidak ditemukan
            echo "ID not found.";
        }
        ?>
        <h1>Edit user</h1>
        <form action="proses_update_user.php" method="post">
            <input type="hidden" name="id" value="<?= $dt_user['id'] ?>">

            <div class="mb-3 input-group">
                <label for="Username" class="input-group-text"><i class="fas fa-user"></i></label>
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $dt_user['username'] ?>">
            </div>
            <div class="mb-3 input-group">
                <label for="Email" class="input-group-text"><i class="fas fa-envelope"></i></label>
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $dt_user['email'] ?>">
            </div>
            <div class="mb-3 input-group">
                <label for="Password" class="input-group-text"><i class="fas fa-key"></i></label>
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?= $dt_user['password'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Logged as</b></label>
                <div class="mb-0">
                    <label for="admin" class="form-label">Admin</label>
                    <input type="radio" class="form-check-input" id="admin" name="role" value="admin">
                </div>
                <div class="mb-1">
                    <label for="member" class="form-label">Customer</label>
                    <input type="radio" class="form-check-input" id="customer" name="role" value="customer">
                </div>
            </div>
            <div class="mb-3"></div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>

</html>