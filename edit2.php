<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
	include "koneksi2.php";
	$id=$_POST['id'];
	$order_id=$_POST['order_id'];
	$nama=$_POST['nama'];
	$ket_1=$_POST['ket_1'];
	$ket_2=$_POST['ket_2'];

	$sql="UPDATE finale SET ORDER_ID='$order_id', Nama='$nama', Ket_1='$ket_1',Ket_2='$ket_2' WHERE ID='$id' ";
	$hasil=mysqli_query($connect,$sql);
	if($hasil){
		header("location:tabel.php");
	}
	else {
		echo "Update Gagal!";
	}
?>
<a href="tabel.php"><button>Kembali Ke Index</button>