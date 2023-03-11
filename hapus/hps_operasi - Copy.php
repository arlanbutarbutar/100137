<?php
include "../config.php";
$id_operasi = mysqli_real_escape_string($koneksi,$_GET['id_operasi']);
$query = mysqli_query($koneksi,"DELETE FROM operasi WHERE id_operasi='$id_operasi' ");
header('location:../operasi.php?pesan=hapus-berhasil');
?>