<?php
	include "koneksi.php";
	$nama = addslashes($_POST['nama']);
	$pass = md5($_POST['password']);
	$sql = "INSERT INTO akun (nama,pass) values ('$nama','$pass')";
	$hasil = mysqli_query($connect,$sql);
	if ($hasil) {
		echo "Pendaftaran Berhasil!";
	}
	else {
		echo "Pendaftaran Gagal!";
	}
	?>
	<a href="index.php"><center><button style="size: 24px">Kembali Ke Index</button></center>