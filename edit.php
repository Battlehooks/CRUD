<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<a href="logout.php"><div align="right"><button class="btn btn-primary">LOGOUT</button></div></a>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript">
		function editsure(){
			var r = confirm('Anda yakin ingin mengedit Data Ini?');
			if (r == false){
				event.preventDefault();
			}
		}
		function index(){
			var r = confirm('Anda Yakin ingin kembali ke Index?');
			if (r == false){
				event.preventDefault();
			}
		}
	</script>
</head>
<body>
	<div class="container">
	<?php
		include "koneksi2.php";
		$id=$_GET['id'];
		$hasil=mysqli_query($connect,"SELECT * FROM finale where ID=$id");
		while ($a=mysqli_fetch_array($hasil))	{
			echo "
			<h2 align='center'>Selamat Datang!</h2>
			<h5 align='center'>Anda saat ini menyunting Data milik $a[Nama]</h5>
			<form method='post' action='edit2.php'>
			<div class='form-group'>
			<label>ORDER ID :</label>
			<input type='hidden' name='id' value ='$a[ID]'>
			<input type='varchar' name='order_id' class='form-control' placeholder='Order ID' value= '$a[ORDER_ID]'>
			</div>
			<div class='form-group'>
			<label>Nama :</label>
			<input type='text' name='nama' class='form-control' placeholder='Nama' value= '$a[Nama]'>
			</div>
			<div class='form-group'>
			<label>Keterangan 1 :</label>
			<input type='text' name='ket_1' class='form-control' placeholder='Keterangan 1' value= '$a[Ket_1]'>
			</div>
			<div class='form-group'>
			<label>Keterangan 2 :</label>
			<input type='text' name='ket_2' class='form-control' placeholder='Keterangan 2' value= '$a[Ket_2]'>
			</div><br>
			<button type='submit' name='submit' class='btn btn-primary' onclick='editsure()'>SUNTING</button>&ensp;&ensp;
			<a href='tabel.php'><button class='btn btn-primary' onclick='index()'>KEMBALI KE INDEX</button>
			</form>
			";
		}
		?>
	</div>
</body>
</html>