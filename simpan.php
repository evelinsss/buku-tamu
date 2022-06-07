<?php
$conn = mysqli_connect("localhost", "root", "", "daftartamu");
    include "../login/function.php";

    
    $nama = $_POST['nama'];
    $Instansi = $_POST['instansi'];
    $Tujuan = $_POST['tujuan'];
    $Waktu = $_POST['waktu'];
    $Tanggal = $_POST['tanggal'];
    $Perihal = $_POST['perihal'];

    $simpan = mysqli_query($conn, "INSERT INTO tb_tamu VALUES
           ('','$nama','$Instansi','$Tujuan', '$Waktu', '$Tanggal', '$Perihal'");
    if($simpan) {
        echo "<script>
        alert('Data berhasil disimpan');
        document.location.href = '../index.php';
        </script>";    
    } else {       
        echo "<script>
       alert('Data gagal disimpan');
        document.location.href = 'input.php';
        </script>";   
    }
?>

 
