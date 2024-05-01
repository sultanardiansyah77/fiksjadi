<?php

    require 'admin.php';

    // ambil data dari URL
    $id = $_GET['id'];

    // ambil data mahasiswa berdasarkan id
    $pembeli = query("SELECT * FROM orderan WHERE id = '$id'")[0];

     // cek apakah tombol submit sudah ditekan atau belum
     if (isset($_POST["submit"])) {
        // cek apakah data berhasil diubah atau tidak
        if ( ubah($_POST) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'haladmin.php';
                </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
    }

    $status = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai yang dipilih dari form
        $status = $_POST["status"];
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Orderan</title>
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
        }
        .table {
        box-shadow: 5px 5px 10px gray;
        }

        .table th {
        background-color: gold;
        }
        
        a{
            text-decoration: none;
        }

        .card{
            box-shadow: 5px 5px 15px gray;
        }
        .stripped{
            width: 100px;
            height: 5px;
            background-color: gold;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        @media (max-width:760px){
            *{
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <table class="table table-striped-columns" border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No</th> 
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Total Beli</th>
                    <th>Status</th>
                </tr>
                    <tr>
                        <input type="hidden" name="id" value="<?= $pembeli["id"]; ?>">
                        <td><?= $pembeli["id"]; ?></td>
                        <td><?= $pembeli["userid"]?></td>
                        <td><?= $pembeli["username"]?></td>
                        <td><?= $pembeli["hargadm"]?></td>
                        <td>
                            <input type="radio" name="status" id="belum" value="BELUM DI PROSES" <?php if ($pembeli["status"] === "BELUM DI PROSES") echo "checked"; ?>>
                            <label for="belum">BELUM DI PROSES</label><br>
                            <input type="radio" name="status" id="sedang" value="SEDANG DI PROSES" <?php if ($pembeli["status"] === "SEDANG DI PROSES") echo "checked"; ?>>
                            <label for="sedang">SEDANG DI PROSES</label><br>
                            <input type="radio" name="status" id="sudah" value="SUDAH DI PROSES" <?php if ($pembeli["status"] === "SUDAH DI PROSES") echo "checked"; ?>>
                            <label for="sudah">SUDAH DI PROSES</label>
                        </td>
                    </tr>
            </table>
            <center>

                <button class="btn btn-warning" type="submit" name="submit">Ubah Data</button>
            </center>
        </form>
        </div>
    <br>
    
</body>
</html>
