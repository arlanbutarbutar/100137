<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$jabatan = $_POST['jabatan'];
$pangkat = $_POST['pangkat'];
$satker = $_POST['satker'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
// query SQL untuk insert data
$query="UPDATE personil SET nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',tlp='$tlp',id_jabatan='$jabatan',id_pangkat='$pangkat',id_satker='$satker', username='$username',password='$password',level='$level' where nrp='$nrp'";
mysqli_query($koneksi, $query);
header("location:personil.php");
// mengalihkan ke halaman index.php
?>