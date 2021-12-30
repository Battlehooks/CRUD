<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabel CRUD</title>
	<a href="logout.php"><div align="right"><button class="btn btn-primary">LOGOUT</button></div></a>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript">
			function phpfunction(){
			var r = confirm('Apakah Anda Yakin Membuat Data Baru?');
			if (r == false){
				event.preventDefault();
			}
		}
		function suredelete(){
			var r = confirm('Anda Yakin ingin Menghapus Data Ini?');
			if (r == false){
				event.preventDefault();
			}
		}
	</script>
</head>
<body>
	<div class="container">
<h1 align="center">Selamat Datang di Interface CRUD Table</h1>
<h2>Input Data</h2>
<form action="form.php" method="post">
			<div class="form-group">
				<label>ORDER ID :</label>
				<input type="varchar" name="order_id" class="form-control" placeholder="Order ID"/>
			</div>
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" name="nama" class="form-control" placeholder="Nama"/>
			</div>
			<div class="form-group">
				<label>Keterangan 1 :</label>
				<input type="text" name="ket_1" class="form-control" placeholder="Keterangan 1">
			</div>
			<div class="form-group">
				<label>Keterangan 2 :</label>
				<input type="text" name="ket_2" class="form-control" placeholder="Keterangan 2">
			</div><br>
			<button type="submit" name="submit" class="btn btn-primary" onclick="phpfunction()">SIMPAN</button>&ensp;&ensp;
			<a href="index.php"><button class="btn btn-primary" onclick="reset()" type="reset" value="reset">RESET</button></a>
		</form>
<h1 style="font-weight: bold;" align="center">Tabel Data</h1>
<table border="1" align="center" width="1080">
	<thead>
		<tr>
			<td align="center">No.</td>
			<td align="center" width="150">ORDER ID</td>
			<td align="center" width="250">Nama</td>
			<td align="center" width="250">Keterangan 1</td>
			<td align="center" width="250">Keterangan 2</td>
			<td align="">HAPUS/SUNTING</td>
		</tr>
	</thead>
	<tbody>
		<?php
		include "koneksi2.php";
		$no=1;
		$ambildata=mysqli_query($connect,"SELECT * FROM finale");
		while($a=mysqli_fetch_assoc($ambildata)){
		echo "
		<tr>
			<td>$no</td>
			<td>$a[ORDER_ID]</td>
			<td>$a[Nama]</td>
			<td>$a[Ket_1]</td>
			<td>$a[Ket_2]</td>"
			?>
			<td><a onclick="suredelete()" <?php echo "href='hapus2.php?id=$a[ID]'" ?>>HAPUS</a>
				<a <?php echo "href='edit.php?id=$a[ID]'" ?>>SUNTING</a></td>
		</tr>
		<?php
		$no++;
	}
	?>
	</tbody>
</table>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>