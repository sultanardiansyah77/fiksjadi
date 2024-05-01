<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Angga Store - Top Up Game Termurah</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    body{
      font-family: 'Poppins';
      background-image: url(img/bg.png);
    }
    .container-fluid{
      margin-top: -10px;
      height: 70px;
      box-shadow: 5px 0px 30px gray;
      background: none;
    }
    .banner img{
      box-shadow: 10px 10px 25px gray;
      margin-bottom: 50px;
      border-radius: 30px;
    }
    .daftargame .card{
      width: 10rem;
      text-align: center;
      margin-left: 20px;
      box-shadow: 7px 7px 25px gray;
      margin-bottom: 50px;
      border-radius: 10px;
      background-image: url(img/bg.png);
      background-size: cover;
      background-position: left;
    }

    .containerz{
      display: flex;
      justify-content: center;
    }

    .daftargame{
      display: flex;
      flex-direction: row;
    }
    .daftargamez{
      display: flex;
      flex-direction: row;
    }
    
    .daftargame .card img{
      border-radius: 10px;
    }
    a{
      text-decoration: none;
      color: black;
    }
    .navbar-nav{
      align-items: right;
    }

    .site-footer{
      background-color: white;
    }

    span{
      color: gold;
    }

    .social-icons{
      display: flex;
      flex-direction: row;
    }

    .social-icons li{
      margin-right: 1rem;
    }
    .site-footer{
      margin-top: 2rem;
      box-shadow: -5px -5px 30px gray;
    }
    /* Responsive */
    @media (max-width:1200px) {
            .container-fluid{
              width: 100%;
              height: 100px;
            }
            .container-fluid img{
              width: 60px;
            }
            .banner img{
              width: 85%;
              border-radius: 10px;
            }

            .collapse .navbar-nav{
              display: flex;
              flex-direction: row;
            }

            .collapse .navbar-nav .nav-item{
              padding-right: 30px;
            }

            .containerz{
              width: 85%;
            }
            .daftargame{
              margin-left: -1.5rem;
            }
            .daftargamez .card{
              width: 7rem;
            }
          }
          
          @media (max-width:760px) {
            .daftargame .card .card-body {
              font-size: 70%;
              margin: -10px -10px -10px -10px;
            }
            .daftargame{
              flex-direction: column;
              
            }
            .daftargamez .card{
              width: 5rem;
            }

            .container-fluid img{
              width: 30px;
            }
            .container-fluid .navbar-brand{
              font-size: 100%;
            }
            .text-justify{
              font-size: 15px;
            }
        }
  </style>
</head>
<body>

  <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <img src="img/logostore.png" width="35"  class="d-inline-block align-text-top">
        <a class="navbar-brand" href="#">Angga Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="color: gold; text-shadow: 1px 1px 1px black;"><i class="fa-solid fa-house-chimney" style="margin-right: 5px; color: gold;"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar.php"><i class="fa-solid fa-user-plus" style="margin-right: 5px;"></i>Daftarkan Akun Game</a>
            </li>
          </ul>
        </div>
      </div>
    </nav><br>

    <center>
      <div class="banner">
        <img src="img/1685596371slider promo juni.jpg" width="75%">
      </div>
      <div class="containerz">
        <div class="daftargame">
            <div class="daftargamez">
                <a href="mlbb.php">
                <div class="card">
                  <img src="img/1683475702mlbbly.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Mobile Legends</p></a>
                  </div>
                </div>
                <a href="#">
                <div class="card">
                  <img src="img/comingson.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Coming Soon!</p></a>
                  </div>
                </div>
                <a href="#">
                <div class="card">
                  <img src="img/comingson.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Coming Soon!</p></a>
                  </div>
                </div>
            </div>
            <div class="daftargamez">
                <a href="#">
                <div class="card">
                  <img src="img/comingson.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Coming Soon!</p></a>
                  </div>
                </div>
                <a href="#">
                  <div class="card">
                    <img src="img/comingson.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Coming Soon!</p></a>
                    </div>
                  </div>
                <a href="#">
                  <div class="card">
                    <img src="img/comingson.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Coming Soon!</p></a>
                    </div>
                  </div>
            </div>
          </div>
      </div>
    </center>

     <!-- Site footer -->
     <footer class="site-footer">
      <div class="container footer">
        <br>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6><span>About</span></h6>
            <p class="text-justify">Angga Store (PT ANGGA STORE INDONESIA) adalah tempat top up games yang aman, murah dan terpercaya. Proses nya cepat. Open 24 jam. Payment terlengkap. Jika ada kendala silahkan klik logo CS pada kanan bawah di website ini.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6><span>Menu</span></h6>
            <ul class="footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="daftar.php">Daftarkan Akun Anda</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6><span>Game</span></h6>
            <ul class="footer-links">
              <li><a href="mlbb.php">Mobile Legends</a></li>
              <li><a href="#">Coming Soon</a></li>
              <li><a href="#">Coming Soon</a></li>
              <li><a href="#">Coming Soon</a></li>
              <li><a href="#">Coming Soon</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2023  All Rights Reserved by 
         <a href="#">Angga Store</a>.
            </p>
            <a href="haladmin.php" style="color:red;">( Admin Button - Khusus Admin )</a>
          </div>
        </div>
      </div>
      <br><br>
</footer>


    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>