<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-image: url(img/bg.jpg);">
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Official Bookstore |</a>
                <a class="navbar-brand" aria-current="page" href="kontak.php">Contact</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div>
        <table style="margin-right: 200px;"><td>
                    <form action="select.php" method="post" >
                        <input type="text" name="search" placeholder="Cari Bedasarkan Judul Buku" class="btn btn-outline-light" kategori/kategori.php>
                        <input class="btn btn-outline-light" type="submit" value="Cari">
                    </form>
                </td>
        </table>
        </div>
        <form action="profile.php" method="post" style="margin-right: 20px;">
        <input class="btn btn-outline-light" type="submit" value="Profile">
        </form>
    </nav>
    <br>
<div style="margin-left: 150px; margin-right: 150px;">
    <?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "error"){
			echo " Username atau Password Salah !!!";
		} elseif ($pesan == "belum_login") {
			echo '<script>alert("Harap Login Terlebih Dahulu !!!");</script>';
		} elseif ($pesan == "logout") {
			echo '<script>alert("Berhasil Log Out !!!");</script>';
		} elseif ($pesan == "regist") {
			echo '<script>alert("Berhasil Registrasi !!!");</script>';
		}
	}
	?>
    <center>
        <h1>Welcome, <?php session_start(); echo $_SESSION['username'];?></h1>
    </center><br><br>
    <div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php 
                    include "../koneksi.php";
                    $nama = $_POST['search'];
                    $query_mysql = mysqli_query($koneksi, "SELECT id, nama_buku, author, kategori, stok, FORMAT(harga, 0) AS harga FROM data_buku WHERE kategori LIKE '%".$nama."%' OR nama_buku LIKE '%".$nama."%' ")or die(mysqli_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                <div class="card" style="width: 18rem; margin: 30px;">
                    <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['nama_buku']; ?></h5>
                            <div>
                            <p class="card-text"><?php echo $data['author']; ?> | <?php echo $data['kategori']; ?></p>
                            <p class="card-text btn btn-outline-primary"><?php echo "Rp. {$data['harga']}"; ?></p><br>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><br>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                </div>
                <?php } ?>
        </div>
    </div>
</div>
</body>
</html>