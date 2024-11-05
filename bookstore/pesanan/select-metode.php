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
    <h1>Daftar Pemesanan Buku</h1>
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
	<a class="btn btn-outline-primary" href="pesanan.php">Semua Data</a>
    <br><br>
    <table><td>
    <form action="select-metode.php" method="post">
                    <select name="metode" id="metode" required placeholder="Kategori">
                        <option value="BRI">BRI</option>
                        <option value="Bank Mandiri">Bank Mandiri</option>
                        <option value="BNI">BNI</option>
                        <option value="Qris">Qris</option>
                        <option value="Dana">Dana</option>
                        <option value="Gopay">Gopay</option>
                    </select>
        <input class="btn btn-outline-primary" type="submit" value="Cari">
    </form>
    <form action="select-judul.php" method="post">
        <input type="text" name="nama_buku" placeholder="Cari Bedasarkan Judul Buku">
        <input class="btn btn-outline-primary" type="submit" value="Cari">
    </form>
    </td>
    </table>
	<br>
 
	<table border="1" class="table table-striped">
		<tr class="table-dark">
			<th>No</th>
			<th>Judul Buku</th>
			<th>Username</th>
			<th>Metode Pembayaran</th>
			<th>Harga</th>	
            <th>Jumlah</th>	
            <th>Total Harga</th>	
		</tr>
		<?php 
		include "../koneksi.php";
        $metode = $_POST['metode'];
		$query_mysql = mysqli_query($koneksi, "SELECT id, nama_buku, username, metode, jumlah, total, FORMAT(harga, 0) AS harga FROM pesanan WHERE metode='$metode' ")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?>.</td>
			<td><?php echo $data['nama_buku']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['metode']; ?></td>
			<td><?php echo "Rp. {$data['harga']}"; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
			<td><?php echo $data['total']; ?></td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<br>
</body>
</html>