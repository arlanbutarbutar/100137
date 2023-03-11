<?php
include "../config.php";
$no_sprint = mysqli_real_escape_string($koneksi,$_GET['no_sprint']);
$query = mysqli_query($koneksi,"DELETE FROM sprint WHERE no_sprint='$no_sprint' ");
header('location:../sprint.php?pesan=hapus-berhasil');
?>