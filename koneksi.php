<?php 
$koneksi = mysqli_connect("localhost","root","","poltek_reskrim");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>