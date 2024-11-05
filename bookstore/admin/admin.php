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

    <?php 
		session_start();
		if($_SESSION['level']!="admin"){
			header("location:../index.php?pesan=belum_login");
		}
	?>

    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Official Bookstore |</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="../verification/logout.php" class="btn btn-primary" style="margin-right: 30px;">LOG OUT</a>
        </div>
    </nav>
    <br>

    <div class="row" style="padding: 45px;">
        <div class="card" style="width: 18rem;  margin: 68px;">
            <div class="card-body">
                <h5 class="card-title">Kategori Buku</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="../kategori/kategori.php" class="btn btn-outline-primary">Go >></a>
            </div>
        </div>
        <div class="card" style="width: 18rem; margin: 68px;">
            <div class="card-body">
                <h5 class="card-title">List Pengguna</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="../pengguna/pengguna.php" class="btn btn-outline-primary">Go >></a>
            </div>
        </div>
        <div class="card" style="width: 18rem; margin: 68px;">
            <div class="card-body">
                <h5 class="card-title">List Pemesanan Buku</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="../pesanan/pesanan.php" class="btn btn-outline-primary">Go >></a>
            </div>
        </div>
    </div>
</body>
</html>