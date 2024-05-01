<?php 

$conn = mysqli_connect("localhost", "root", "", "angga_store");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $kotak = [];
    while ($box = mysqli_fetch_assoc($result)){
        $kotak[] = $box;
    }
    return $kotak;
}

function tambah($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $userid = htmlspecialchars($data["userid"]);
    $username = htmlspecialchars($data["username"]);
    $hargadm = htmlspecialchars($data["hargadm"]);
    $status = htmlspecialchars($data["status"]);

    // query insert data
    $query = "INSERT INTO orderan VALUES ('', '$userid', '$username', '$hargadm', '$status')";
    mysqli_query($conn, $query);

    if( $userid == 0) {
        echo "<script>
                    alert('Akun tidak terdaftar');
                </script>";
        return false;
    }

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM orderan WHERE id = $id");

    return mysqli_affected_rows($conn);

}

function akungame($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $userid = htmlspecialchars($data["userid"]);
    $username = htmlspecialchars($data["username"]);

    // query insert data
    $query = "INSERT INTO users VALUES ('$userid', '$username')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    global $conn;
    
    $query = "SELECT * FROM users WHERE userid = '$keyword'";
    $resultz = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($resultz);

    if( $keyword !== $row['userid']) {
        echo "<script>
            alert('Akun Anda Tidak Terdaftar');
            document.location.href = 'mlbb.php';
        </script>";
        return false;
    } else {
        return query($query);
    }

}
function ubah($data) {

    global $conn;

     // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $status = htmlspecialchars($data["status"]);
    
    // query update data
    mysqli_query($conn, "UPDATE orderan SET
                    status = '$status'
                WHERE id = $id ");

    return mysqli_affected_rows($conn);
}

?>
