<?php

    require 'admin.php';

    $pembeli = query("SELECT * FROM orderan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin (PRIVACY)</title>
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

        .table {
        box-shadow: 5px 5px 10px gray;
        }

        .table th {
        background-color: gold;
        }
        
        a{
            text-decoration: none;
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

        @media (max-width:760px){
            *{
                font-size: 10px;
            }
        }
    </style>
</head>

<body>
    <br>
    <div class="container">
        <table class="table table-striped-columns" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>User ID</th>
                <th>Username</th>
                <th>Total Beli</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
    
            <?php $i = 1; ?>
            <?php foreach ($pembeli as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["userid"] ?></td>
                    <td><?= $row["username"] ?></td>
                    <td><?= $row["hargadm"] ?></td>
                    <td><?= $row["status"] ?></td>
                    <td>
                        <b>
                            <a href="ubah.php?id=<?= $row["id"] ?>">Ubah</a> |
                            <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Yakin Ingin Dihapus?')" style="color: red;">Hapus</a>
                        </b>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <a href="index.php">
        <button class="btn btn-warning">Home</button>
        </a>
    </div><br><br>

</body>

</html>
