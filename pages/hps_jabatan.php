<?php
include "koneksi.php";
$id_jabatan = mysqli_real_escape_string($koneksi,$_GET['id_jabatan']);
$query = mysqli_query($koneksi,"DELETE FROM jabatan WHERE id_jabatan='$id_jabatan' ");
header('location:jabatan.php?pesan=hapus-berhasil');
?>