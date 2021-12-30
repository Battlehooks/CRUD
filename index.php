<!DOCTYPE html>
<html>
<head>
	<title>Login Session</title>
</head>
<body>
	<table align="center" width="360" style="background-color: red">
		<table align="center" width="240">
			<form method="POST" action="login.php">
			<tr>
				<td>
			<label>Nama :</label><br>
			<input type="text" name="username" size="20" required="">
		</td>
	</tr>
	<tr>
		<td>
		<label>Password :</label><br>
			<input type="password" name="password" size="20" required="">	
		</td>
	</tr>
	<tr>
		<td>
		<button type="submit" name="submit" value="submit">LOGIN</button>
		</td>
	</tr>
</form>
	</table>
	<table align="center" width="240">
<tr>
	<td><br>
	<label>Belum memiliki akun? Daftar di sini!</label><br>
	<a href="register.php"><button>REGISTER</button></a>
	</td>
</tr>
</table>
</table>
</body>
</html>