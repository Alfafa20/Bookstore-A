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
		<h1>Daftar Kategori Buku</h1>
		<h2>Menampilkan data dari database. Selamat datang, <?php echo $_SESSION['username'] ?> !</h2>
	</div>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo '<script>alert("Data berhasil Diinput");</script>';
		}else if($pesan == "update"){
			echo '<script>alert("Data berhasil Diupdate");</script>';
		}else if($pesan == "hapus"){
			echo '<script>alert("Data berhasil Dihapus");</script>';
		}
	}
	?>
	<h3>Data Buku Official Bookstore</h3>
	<a class="btn btn-outline-primary" href="../admin/admin.php">< Kembali</a>
	<a class="btn btn-outline-primary" href="kategori.php">Semua Data</a>
	<a class="btn btn-outline-primary" href="input.php">+ Tambah Data Baru</a>
    <br><br>
    <table><td>
    <form action="select-judul.php" method="post">
        <input class="btn btn-outline-primary" type="text" name="search" placeholder="Cari Bedasarkan Judul Buku" style="width: 330px;">
        <input class="btn btn-outline-primary" type="submit" value="Cari">
    </form>
    </td>
    </table>
	<br>
 
	<table border="1" class="table table-striped" style="flexbox: center;">
		<tr class="table-dark">
			<th>No</th>
			<th>Judul Buku</th>
			<th>Author</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>	
            <th>Opsi</th>	
		</tr>
		<?php 
		include "../koneksi.php";
		$query_mysql = mysqli_query($koneksi, "SELECT id, nama_buku, author, kategori, stok, FORMAT(harga, 0) AS harga FROM data_buku")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?>.</td>
			<td><?php echo $data['nama_buku']; ?></td>
			<td><?php echo $data['author']; ?></td>
			<td><?php echo $data['kategori']; ?></td>
			<td><?php echo "Rp. {$data['harga']}"; ?></td>
			<td><?php echo $data['stok']; ?></td>
			<td>
                <a class="btn btn-outline-success" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="btn btn-outline-danger" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<br>
</body>
</html>