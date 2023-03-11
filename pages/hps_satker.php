<?php
include "koneksi.php";
$id_satker = mysqli_real_escape_string($koneksi,$_GET['id_satker']);
$query = mysqli_query($koneksi,"DELETE FROM satker WHERE id_satker='$id_satker' ");
header('location:satker.php?pesan=hapus-berhasil');
?>