<!DOCTYPE html>
<html>
<head>
	<title>Official Bookstore</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

	<?php 
		session_start();
		if($_SESSION['level']!="admin"){
			header("location:../index.php?pesan=belum_login");
		}

		if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
			if($pesan == "tersedia"){
				echo '<script>alert("Data Telah Tersedia");</script>';
			}
		}
	?>

	<div class="judul">		
		<h1>Tambah Data Buku</h1>
		<h2>Menambah Data Buku ke Dalam Database</h2>
	</div>    

	<br/>
 
	<a class="btn btn-outline-primary" href="kategori.php">< Kembali</a> 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="nama_buku" required></td>					
			</tr>	
			<tr>
				<td>Author</td>
				<td><input type="text" name="author" required></td>					
			</tr>	
            <tr>
                <td><label for="Kategori">Kategori</label></td>
                    <td><select name="kategori" id="kategori" required>
                        <option value="Novel">Novel</option>
                        <option value="Non-Fiksi">Non-Fiksi</option>
                        <option value="Fabel">Fabel</option>
                        <option value="Anak-anak">Anak-anak</option>
                        <option value="Dewasa">Dewasa</option>
                        <option value="Komik">Komik</option>
                        <option value="Ensiklopedia">Ensiklopedia</option>
                        <option value="Religi">Religi</option>
                    </select></td>	
            </tr>
			<tr>
				<td>harga</td>
				<td><input type="number" name="harga" required maxlength="10"></td>					
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok" required></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input class="btn btn-outline-primary" type="submit" value="Simpan"></td>					
			</tr>	
		</table>
	</form>
</body>
</html>