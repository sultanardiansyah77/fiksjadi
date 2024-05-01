<?php

    require("admin.php");

    $dmml = query("SELECT * FROM diamondml");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Game - Mobile Legends</title>
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

        .container{
            display: flex;
            flex-direction: row;
        }

        .card {
            margin-bottom: 10rem;
            box-shadow: 10px 10px 25px gray;
            margin-right: 2rem;
        }

        .card img {
            width: 150px;
            margin-top: 20px;
            border-radius: 20px;
        }

        .card card-ml{
            width: 25rem;
        }

        .card card-dm{
            width: 45rem;
        }

        .stripped {
            width: 65px;
            height: 5px;
            background-color: gold;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .list-group-item input {
            border-radius: 10px;
            border-color: lightgray;
            width: 425px;
            height: 40px;
            border: 1;
            padding-left: 10px;
        }

        input[type="radio"] {
            display: none;
        }

        label {
            position: relative;
            color: white;
            font-size: 14px;
            background-color: dimgray;
            width: 200px;
            height: 55px;
            margin-right: 15px;
            margin-bottom: 15px;
            padding-top: 5px;
            padding-left: 10px;
            border-radius: 10px;
            cursor: pointer;
        }

        label:hover {
            transition: 0.3s;
            background-color: lightgray;
        }

        input[type="radio"]:checked + label {
            background-color: gold;
            color: black;
            box-shadow: 0px 0px 15px yellow;
        }

        btn {
            position: relative;
            float: right;
        }

        label .apk {
            width: 150px;
            margin-top: 0px;
            border-radius: 0%;
        }

        @media (max-width:1200px) {
            .container-fluid{
              width: 100%;
              height: 100px;
            }
            .container-fluid img{
              width: 60px;
            }
            .collapse .navbar-nav{
              display: flex;
              flex-direction: row;
            }
            .collapse .navbar-nav .nav-item{
              padding-right: 30px;
            }
            .container{
                flex-direction: column;
            }
            .card card-ml{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .card card-ml{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .card card-dm{
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
        
        @media (max-width:760px) {
            .container{
                margin-left: 1rem;
            }
            .card{
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 3rem;
            }
            label {
                width: 150px;
            }
            label .apk{
                width: 100px;
            }
            input[type="number"]{
                width: 200px;
            }
        }

        @media (max-width:450px){
            label{
                width: 100px;
                height: 43px;
                font-size: 10px;
            }
            label .apk{
                padding-top: 5px;
                width: 65px;
            }
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

    <div class="container">

        <div class="card card-ml">
            <center><img src="img/1683475702mlbbly.jpg" class="card-img-top"></center>
            <div class="card-body">
                <h4 class="card-title">Mobile Legends Bang Bang</h4>
                <div class="stripped"></div>
                <p class="card-text">Top Up Diamond Mobile Legends <br> <b>Proses Tercepat No 1 Di Indonesia</b></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">1. Masukkan <b>ID</b></li>
                <li class="list-group-item">2. Pilih <b>Nominal</b> Diamond</li>
                <li class="list-group-item">3. Pilih <b>Metode Pembayaran</b></li>
                <li class="list-group-item">4. Klik <b>Beli</b> & Lakukan Pembayaran</li>
                <li class="list-group-item">5. Diamond Akan Masuk Ke Akun Anda</li>
            </ul>
            <div class="card-body">
                <center>
                    <h5 class="card-title" style="color: gold;">Top Up Buka 24 Jam</h5>
                </center>
            </div>
        </div>
    
        <form action="bayar.php" method="post">
            <div class="card card-dm">
                <div class="card-body">
                    <h4 class="card-title">Lengkapi Data</h4>
                    <div class="stripped" style="width: 200px;"></div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span for="id">User ID</span><br>
                            <input type="number" name="keyword" id="userid" placeholder="Masukkan User ID" autocomplete="off" required>
                        </li>
                        <li class="list-group-item">
                            <span>Pilih Nominal</span><br><br>
                            <?php $i = 1 ?>
                            <?php foreach ($dmml as $row) : ?>
                                <input type="radio" name="diamond" value="<?= $row["harga"] ?>" id="<?= $i ?>">
                                <label for="<?= $i ?>"><?= $row["jumlah"] ?><br><?= $row["harga"] ?></label>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </li>
                        <li class="list-group-item">
                            <span>Pilih Metode Pembayaran</span><br><br>
                            <input type="radio" name="wallet" id="gopay" value="<img src='img/qrgopay.jpeg'>">
                            <label for="gopay"><img class="apk" src="img/gopay.png" style="margin-top: 10px;"></label>
                            <input type="radio" name="wallet" id="dana" value="<img src='img/qrdana.jpeg'>">
                            <label for="dana"><img class="apk" src="img/dana.png"></label>
                        </li>
                    </ul>
                </div>
                <ul>
                    <button type="btn" class="btn btn-warning" name="btn" href="bayar.php"><i class="fa-solid fa-cart-shopping"></i> Order Now</button>
                </ul><br>
            </div>
        </form>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
