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
                <a class="navbar-brand" href="#">Official Bookstore |</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="user/kontak.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="verification/login.php">Login</a>
                        </li>
                    </ul>
            </div>
            </div>
        </nav>
    </nav>
    <br>
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
    <br>
    <center>
        <h2 style="color: white; margin-left: 150px; margin-right: 150px;">About Us</h2>
    </center>
    <h4 style="color: white; margin-left: 150px; margin-right: 150px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quo nobis ullam debitis unde recusandae fuga! Quo necessitatibus saepe, laudantium eum maxime vitae mollitia, autem vero ipsum, officiis temporibus ab!
    Excepturi eius omnis sed. Delectus voluptatibus architecto, cumque minima blanditiis cum debitis animi praesentium nobis quaerat eaque saepe itaque quo modi, repudiandae nihil quam laboriosam doloribus facere eveniet at quod!
    Incidunt earum animi nisi odio! Asperiores corrupti quis fugit aliquid? Praesentium maxime enim in expedita facilis aliquam, consequatur harum vel quasi, facere culpa adipisci. Omnis officiis quasi nostrum nobis fugiat!
    Nobis cumque nisi quas aliquid hic amet quibusdam quia est repellat. Voluptates, reiciendis! Placeat modi a eum ad. Repellat aliquam iste sit corrupti quia sint voluptatum libero incidunt quos et?</h4>
    <br>
    <center>
        <a href="verification/login.php" class="btn btn-outline-warning">Pesan Sekarang !!!</a>
    </center>
</body>
</html>