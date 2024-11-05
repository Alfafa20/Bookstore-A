<!DOCTYPE html>
<html>
<head>
	<title>Registrasi | Official Bookstore</title>	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Welcome to Our Family In Official Bookstore</h1>
    <h3>Halaman Registrasi Sederhana</h3>

    <?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "error"){
			echo '<script>alert("Akun/Username Telah Tersedia !!!");</script>';
		} elseif ($pesan == "verif") {
            echo '<script>alert("Harap Verifikasi Password Dengan Benar");</script>';
        }
	}
	?></div>
    <br><br>

	<form action="regist.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-outline-primary" type="submit" name="login" value="Regist" >
				<a class="btn btn-outline-primary" href="../index.php">< Kembali</a> 
				</td>
			</tr>
		</table>
	</form>
    <br>
    <h3>Sudah Punya Akun? Silahkan <a href="login.php">Login</a></h3>
</body>
</html>