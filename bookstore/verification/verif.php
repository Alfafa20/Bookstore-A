<?php 
session_start();
include '../koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM data_user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if ($cek > 0 ) {
    $data = mysqli_fetch_array($query);

    if ($data['level'] =="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:../admin/admin.php");
    } else if ($data['level'] =="user") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $data['id'];
        header("location:../user/user.php");
    } else {
        echo "Maaf Anda Bukan Admin, Mohon Kembali";
        header("location:../index.php?pesan=error");
    }
} else {
    header("location:login.php?pesan=error");
}
?>