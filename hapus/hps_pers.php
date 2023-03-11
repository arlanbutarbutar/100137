<?php
include "../config.php";
$nrp    = mysqli_real_escape_string($koneksi,$_GET['nrp']);
$query = mysqli_query($koneksi,"DELETE FROM personil WHERE nrp='$nrp' ");
header('location:../personil.php?pesan=hapus-berhasil');
?>