<?php 
include '../koneksi.php';
$id = $_GET['id'];
 
mysqli_query($koneksi, "DELETE FROM data_buku WHERE id='$id'")or die(mysqli_error());
 
header("location:kategori.php?pesan=hapus");
?>