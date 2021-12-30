<?php
	include "koneksi.php";
	$user = addslashes($_POST['username']);
	$pass = md5($_POST['password']);
	$tabel = mysqli_query($connect,"SELECT * FROM akun WHERE nama='$user' and pass='$pass'");
	$row = mysqli_num_rows($tabel);
		if ($row > 0){
		while($row = mysqli_fetch_array($tabel)){
			session_start();
			$_SESSION['username']=$user;
			echo 'Login Berhasil!';
			header('location:tabel.php');
		}
	}
	else {
		echo 'Password atau Username anda salah, Coba lagi!';
	}
	?>
	<br>
	<a href="index.php"><button style="size: 20px">Kembali ke Index</button></a>