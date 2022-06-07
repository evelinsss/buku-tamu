<?php 
	include '../login/function.php';
		if (isset($_POST['submit'])) {
 		if (simpan($_POST) > 0){
 			echo "
 		<script>
 		alert('Data berhasil disimpan');
 		document.location.href = '../index.php';
 		</script>
 		";
 		}else {
 			echo "
 		<script>
 		alert('Data gagal disimpan');
 		document.location.href = 'input.php';
 		</script>
 		";
 		}
 	}
 ?>
<!DOCTYPE html>
<html>
<head>

	
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./images/icon.png">
    <title>HALAMAN DAFTAR TAMU</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
  <div class="container">
  	<div class="page-header">
  		<tr>
  			<td>
			<a class="btn btn-primary btn-lg" href="../index.php">HOME</a>
		</td>
  		</tr>
<div class="container">
	<div class="page-header">
<h3 align="center"><b>FORM DAFTAR TAMU</b></h3>
	</div>
<form action="" method="post">
	<table class="table" >
		<tr>
			<td>ID Pengunjung</td>
			<td></td>
			<td>
				<input class="form-control" type="text" name="id_admin" autocomplete= off placeholder="Masukan Id Pengunjung : 01" size="30">
			</td>
		</tr>
		<tr>
			<td>Nama Pengunjung</td>
			<td></td>
			<td>
				<input class="form-control" type="text" name="nama" autocomplete= off placeholder="Masukan Nama Anda" size="30">
			</td>
		</tr>
		<tr>
			<td>Instansi</td>
			<td></td>
			<td>
				<input  class="form-control" type="text" name="instansi" autocomplete= off placeholder="Asal Instansi" size="30">
			</td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td></td>
			<td>
				<input  class="form-control" type="text" name="tujuan" autocomplete= off placeholder="Tujuan" size="30">
			</td>
		</tr>
		<tr>
			<td>Waktu</td>
			<td></td>
			<td>
				<input  class="form-control" type="time" name="waktu"  size="30">
			</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td></td>
			<td>
				<input  class="form-control" type="date" name="tanggal" size="30">
			</td>
		</tr>
		<tr>
			<td>Perihal</td>
			<td></td>
			<td>
				<input  class="form-control" type="textarea" name="perihal" autocomplete= off placeholder="Perihal" size="30">
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button class="btn btn-success btn-lg" type="submit" name="submit">Simpan</button>
				</td>
		</tr>
	</table>
</form>
