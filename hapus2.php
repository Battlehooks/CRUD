<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
	include "koneksi2.php";
	$id=$_GET['id'];

	$sql="DELETE FROM finale WHERE ID=$id";
	$hapus= mysqli_query($connect,$sql);
	if($hapus){
		header("location:tabel.php");
		exit;
	}
	else {
		echo "Error Deleting";
	}
	?>