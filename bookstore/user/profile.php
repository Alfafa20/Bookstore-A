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

    <div style="margin-left: 150px; margin-right: 150px;">
    <?php
    session_start();
    $id = $_SESSION['level'];
    $username = $_SESSION['username'];
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
    </figure><br>
    <br>

    <table border="1" class="table table-striped" style="flexbox: center;">
    <tr class="table-dark">
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
        <?php 
		include "../koneksi.php";
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM data_user WHERE id='$id'")or die(mysqli_error());
		while($data = mysqli_fetch_array($query_mysql)){
		?>
        <tr>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['password']; ?></td>
		</tr>
		<?php } ?>
        </table>

        <div class="d-grid gap-2">
        <a href="" class="btn btn-outline-primary"> Keranjang</a>
        <a href="../verification/logout.php" class="btn btn-outline-primary">LOG OUT</a>
    </div>

    </div>
</body>
</html>