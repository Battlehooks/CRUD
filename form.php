<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Terima Kasih!</title>
</head>
<body>
	<a href="logout.php"><div align="right"><button class="btn btn-primary">LOGOUT</button></div></a>
<h2 align="center">Terima Kasih telah mengisi Data!</h2>
<?php

include "koneksi2.php";

$order_id =$_POST["order_id"];
$nama =$_POST["nama"];
$ket_1 =$_POST["ket_1"];
$ket_2 =$_POST["ket_2"];

$sql = "insert into finale (ORDER_ID,Nama,Ket_1,Ket_2) values ('$order_id','$nama','$ket_1','$ket_2')";
$hasil=mysqli_query($connect,$sql);
if ($hasil) {
	header("location:tabel.php");
}
else {
	echo "Gagal Input Data!";
}

?><br><br>

<a href="tabel.php"><center><button style="size: 24px">KEMBALI KE INDEX</button></center></a>
</body>
</html>