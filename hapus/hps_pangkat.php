<?php
include "../config.php";
$id_pangkat = mysqli_real_escape_string($koneksi,$_GET['id_pangkat']);
$query = mysqli_query($koneksi,"DELETE FROM pangkat WHERE id_pangkat='$id_pangkat' ");
header('location:../pangkat.php?pesan=hapus-berhasil');
?>