<?php
include "../config.php";
$id_tugas = mysqli_real_escape_string($koneksi,$_GET['id_tugas']);
$query = mysqli_query($koneksi,"DELETE FROM tugas WHERE id_tugas='$id_tugas' ");
header('location:../tugas.php?pesan=hapus-berhasil');
?>