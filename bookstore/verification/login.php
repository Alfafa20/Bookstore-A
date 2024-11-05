<!DOCTYPE html>
<html>
<head>
	<title>Login | Official Bookstore</title>	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1>Welcome to Our Family In Official Bookstore</h1>
	<h3>Halaman Login Sederhana</h3>
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "error"){
			echo '<script>alert("Usernam Atau Password Salah !!!");</script>';
		} elseif ($pesan == "belum_login") {
			echo '<script>alert("Harap Login Terlebih Dahulu !!!");</script>';
		} elseif ($pesan == "logout") {
			echo '<script>alert("Berhasil Log Out");</script>';
		} elseif ($pesan == "regist") {
			echo '<script>alert("Berhasil Registrasi");</script>';
		}
	}
	?>
    <div>
	<form action="verif.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" class="btn btn-outline-primary" value="Log In" >
				<a class="btn btn-outline-primary" href="../index.php">< Kembali</a> 
				</td>
			</tr>
		</table>
	</form>
	<br>
	<h3>Belum Punya Akun? Silahkan <a href="registrasi.php">Registrasi</a></h3>
    </div>
</body>
</html>