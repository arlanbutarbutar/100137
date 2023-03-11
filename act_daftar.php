<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nrp = $_POST['nrp'];
$username = $_POST['username'];
$password = $_POST['password'];
// query SQL untuk insert data
$query="UPDATE personil SET username='$username',password='$password' where nrp='$nrp'";
mysqli_query($koneksi, $query);
header("location:login.php");
// mengalihkan ke halaman index.php
?>