<?php 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama_buku'];
$author = $_POST['author'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
mysqli_query($koneksi, "UPDATE data_buku SET `nama_buku`='$nama',`author`='$author', `kategori`='$kategori',`harga`='$harga',`stok`='$stok' WHERE id='$id'"); 
header("location:kategori.php?pesan=update");
?>