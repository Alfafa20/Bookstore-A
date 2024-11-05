<!DOCTYPE html>
<html>
<head>
	<title>Official Bookstore</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="padding-right: 150px; padding-left: 150px;">

	<?php 
		session_start();
		if($_SESSION['level']!="admin"){
			header("location:../index.php?pesan=belum_login");
		}
	?>

	<div class="judul">		
		<h1>Daftar Pengguna</h1>
		<h2>Menampilkan data pengguna dari database. Selamat datang, <?php echo $_SESSION['username'] ?> !</h2>
	</div>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "error"){
			echo '<script>alert("Data Tidak Ditemukan");</script>';
		}
	}
	?>
	<h3>Data Pengguna Buku Official Bookstore</h3>
	<a class="btn btn-outline-primary" href="../admin/admin.php">< Kembali</a>
	<a class="btn btn-outline-primary" href="pengguna.php">Semua Data</a>
    <br><br>
    <table><td>
    <form action="select-pengguna.php" method="post">
        <input type="text" name="username" placeholder="Cari Bedasarkan Username" style="width: 200px;">
        <input class="btn btn-outline-primary" type="submit" value="Cari">
    </form>
    </td>
    </table>
	<br>
 
	<table border="1" class="table table-striped">
		<tr class="table-dark">
			<th>No</th>
			<th>Username</th>
			<th>Email</th>	
		</tr>
		<?php 
		include "../koneksi.php";
        $username = $_POST['username'];
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM data_user WHERE level='user' AND username LIKE '%".$username."%'")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?>.</td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['email']; ?></td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<br>
</body>
</html>