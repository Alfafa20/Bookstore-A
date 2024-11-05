<?php 
include '../koneksi.php';
$user = $_POST['user'];
$id = $_POST['id'];
$nama = $_POST['nama_buku'];
$author = $_POST['author'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $harga * $jumlah;

$query = mysqli_query($koneksi, "SELECT * FROM data_user WHERE id='$user'");
$input = mysqli_query($koneksi, "SELECT * FROM pesanan");
$sisa = mysqli_query($koneksi, "SELECT stok FROM data_buku WHERE id='$id'");
$akhir = $sisa-$jumlah;
$data = mysqli_num_rows($query);

if ($data > 0) {
    header("location:../user/tambah.php?pesan=tersedia");
} else {
    mysqli_query($koneksi, "INSERT INTO pesanan VALUES('', '$nama', '$author', '$kategori', '$harga', '$jumlah', '$total', '')");
    mysqli_query($koneksi, "UPDATE data_buku SET `stok`='akhir' WHERE id='$id' ");
    header("location:../user/user.php?pesan=input");
}

?>