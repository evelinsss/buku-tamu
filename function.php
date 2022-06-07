<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "daftartamu");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);   
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek konfirmasi password
    if($password !== $password2) {
        echo "<script>
        alert('Konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    // enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO tb_admin VALUES('', '$username', '$password')");
}

function simpan($data) {
    global $conn;
    $idadmin = htmlspecialchars($data['id_admin']);
 	$nama    = htmlspecialchars($data['nama']);
 	$Instansi  = htmlspecialchars($data['instansi']);
	$Tujuan = htmlspecialchars($data['tujuan']);
 	$Waktu = htmlspecialchars($data['waktu']);
 	$Tanggal  = htmlspecialchars($data['tanggal']);
	$Perihal = htmlspecialchars($data['perihal']);
    $query = "INSERT INTO tb_tamu VALUES  ('', '$idadmin','$nama','$Instansi','$Tujuan', '$Waktu', '$Tanggal', '$Perihal'
    )";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



?>