<!DOCTYPE html>
<html lang="en">
<head>
	<title>Official Bookstore</title>
	<!-- <link rel="stylesheet" type="text/css" href="../style.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php 
		session_start();
		if($_SESSION['level']!="admin"){
			header("location:../index.php?pesan=belum_login");
		}
	?>

	<div class="judul">		
		<h1>Sesi Edit Data</h1>
		<h2>Mengedit Data Dari Database</h2>
    </div>    
	
	<br/>
 
    <a class="btn btn-outline-primary" href="kategori.php">< Kembali</a>  
	<br/>
	<h3>Input data baru</h3>

    <?php 
	include "../koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM data_buku WHERE id='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>

	<form action="edit-aksi.php" method="post">		
		<table>
        <tr>
				<td>Judul Buku</td>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				<td><input type="text" name="nama_buku" value="<?php echo $data['nama_buku']?>" required></td>					
			</tr>	
        <tr>
				<td>Author</td>
				<td><input type="text" name="author" value="<?php echo $data['author']?>" required></td>					
			</tr>	
            <tr>
                <td><label for="Kategori">Kategori</label></td>
                    <td><select name="kategori" id="kategori" value="<?php echo $data['kategori']?>" required>
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
				<td><input type="number" name="harga" value="<?php echo $data['harga']?>" required maxlength="10"></td>					
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok" value="<?php echo $data['stok']?>" required></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input class="btn btn-outline-primary" type="submit" value="Simpan"></td>					
			</tr>	
		</table>
	</form>
    <?php } ?>
</body>
</html>