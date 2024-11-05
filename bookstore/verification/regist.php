    <?php
        include('../koneksi.php');
        $nama = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = mysqli_query($koneksi, "SELECT * FROM data_user WHERE username='$nama'");
        $cek = mysqli_num_rows($query);

        if ($cek > 0) {
            header("location:registrasi.php?pesan=error");
        }else {
            mysqli_query($koneksi, "INSERT INTO data_user(`username`, `email`, `password`, `level`) VALUES ('$nama', '$email', '$pass','user')");
            header("location:login.php?pesan=regist");
        }
    ?>