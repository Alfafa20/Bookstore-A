<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Official Bookstore |</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </nav>
    <br>

    <div style="margin-left: 150px; margin-right: 150px; margin-bottom: 150px;">
        <?php
        session_start();
        $id = $_SESSION['level'];
        $username = $_SESSION['username'];
        if ($_SESSION['level']!= $id) {
            header("location:../index.php?pesan=error");
        }
        ?>


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
    <a class="btn btn-outline-primary" href="user.php">< Kembali</a>
        <figure>
            <blockquote class="blockquote">
                <p>Terimakasih telah bergabung bersama kami, <?php echo $username; ?></p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Group Partner Of <cite title="Source Title">Official Bookstore</cite>
            </figcaption>
            <figcaption class="blockquote-footer">
                Silahkan Tinggalkan Masukan Untuk Kami Agar Bisa Berkembang Lebih Baik Lagi :D
            </figcaption>
        </figure>
        <br>
        <br>


        <?php 
            include "../koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM data_user WHERE id='$id'");
            $data = mysqli_fetch_array($query);
        ?>
    <form action="kirim-pesan.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="username" name="username" readonly class="form-control" id="username" value="<?php echo $data['username']?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" readonly class="form-control" id="email" value="<?php echo $data['email']?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <input type="text" name="pesan" class="form-control" placeholder="Masukkan Pesan..." style="height: 250px;">
        </div>
        <button type="submit" class="btn btn-outline-primary" style="width: 200px;">Kirim</button>
    </form>
    </div>
</body>
</html>