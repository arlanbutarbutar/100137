<?php
   require_once("koneksi.php");
   $id_pangkatlama = $_POST['id_pangkatlama']; 
   $id_pangkat = $_POST['id_pangkat'];
   $nama_pangkat = $_POST['nama_pangkat'];
   $sql = "SELECT * FROM pangkat WHERE id_pangkat = '$id_pangkat'";
   $query = $koneksi->query($sql);
   
       $data = "UPDATE pangkat SET id_pangkat = '$id_pangkat', nama_pangkat = '$nama_pangkat' WHERE pangkat.id_pangkat = '$id_pangkatlama'";
       $simpan = $koneksi->query($data);
       if($simpan) {
        header("location:pangkat.php");
       } else {
        echo "<div align='center'>Proses Gagal, <a href='edit_pers.php'>Kembali</a></div>";
       }
?>