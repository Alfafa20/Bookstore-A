<?php 
include '../koneksi.php';
$user = $_POST['username'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$query = mysqli_query($koneksi, "SELECT * FROM kontak");
$data = mysqli_num_rows($query);

mysqli_query($koneksi, "INSERT INTO kontak VALUES('', '$user', '$email', '$pesan')");
header("location:user.php");
?>