<?php

require 'admin.php';

$users = query("SELECT * FROM users");

// tombol ditekan
if (isset($_POST["btn"])) {

    
    $users = cari($_POST["keyword"]);

}

$dmml = query("SELECT * FROM diamondml");

$hargadm = "";
$jenisbayar = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai yang dipilih dari form
    $hargadm = $_POST["diamond"];
    $jenisbayar = $_POST["wallet"];
}

if (isset($_POST["submit"])) {
    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Pembelian Berhasil! Silahkan Menunggu Untuk Di Proses');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Pembelian Gagal!');
                document.location.href = 'index.php';
            </script>";
        echo "<br>";
        echo mysqli_error($conn);
    }
} 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins';
            background-image: url(img/bg.png);
        }

        .container-fluid {
            margin-top: -10px;
            height: 70px;
            box-shadow: 5px 0px 30px gray;
        }

        .card {
            box-shadow: 5px 5px 15px gray;
        }

        .stripped {
            width: 100px;
            height: 5px;
            background-color: gold;
            border-radius: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="img/logostore.png" width="35" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#">Angga Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa-solid fa-house-chimney" style="margin-right: 5px;"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar.php"><i class="fa-solid fa-user-plus" style="margin-right: 5px;"></i>Daftarkan Akun Game</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>

    <center>
        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <h2 class="card-title">Data Top Up Diamonds</h2>
                <div class="stripped"></div>
                <p class="card-text">Isi Form Terlebih Dahulu!</p>
            </div>

            <form action="" method="post" class="regist-form">
                <ul class="list-group list-group-flush">
                    <?php foreach ($users as $row) : ?>
                        <li class="list-group-item">
                            <label for="userid">User ID : </label>
                            <input type="text" name="userid" id="userid" value="<?= $row["userid"] ?>" readonly>
                        </li>
                        <li class="list-group-item">
                            <label for="username">Username : </label>
                            <input type="text" name="username" id="username" value="<?= $row["username"] ?>" readonly>
                        </li>
                        <li class="list-group-item">
                            <label for="hargadm">Jumlah yang harus Dibayar : </label>
                            <input type="text" name="hargadm" id="hargadm" value="<?= $hargadm ?>">
                        </li>
                        <li class="list-group-item">
                            Silahkan Scan Barcode Dibawah ini : <br><br> <?= $jenisbayar ?>
                        </li>
                        <input type="text" name="status" id="status" value="BELUM DI PROSES" hidden>
                    <?php endforeach; ?>
                </ul>
                <div class="card-body">
                    <button class="btn btn-warning" type="submit" name="submit"><i class="fa-solid fa-check"></i>Sudah Bayar</button>
                </div><br>
            </form>
        </div>
    </center><br><br>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
