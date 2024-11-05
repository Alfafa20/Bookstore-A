<?php 
include '../koneksi.php';
$nama = $_POST['nama_buku'];
$author = $_POST['author'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = mysqli_query($koneksi, "SELECT * FROM data_buku WHERE nama_buku='$nama'");
$data = mysqli_num_rows($query);

if ($data > 0) {
    header("location:input.php?pesan=tersedia");
} else {
    mysqli_query($koneksi, "INSERT INTO data_buku VALUES('', '$nama', '$author', '$kategori', '$harga', '$stok')");
    header("location:kategori.php?pesan=input");
}

?>