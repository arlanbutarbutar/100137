<?php
   require_once("koneksi.php");
   $id_satkerlama = $_POST['id_satkerlama']; 
   $id_satker = $_POST['id_satker'];
   $nama_satker = $_POST['nama_satker'];
   $sql = "SELECT * FROM satker WHERE id_satker = '$id_satker'";
   $query = $koneksi->query($sql);
   
       $data = "UPDATE satker SET id_satker = '$id_satker', nama_satker = '$nama_satker' WHERE satker.id_satker = '$id_satkerlama'";
       $simpan = $koneksi->query($data);
       if($simpan) {
        header("location:satker.php");
       } else {
        echo "<div align='center'>Proses Gagal, <a href='edit_satker.php'>Kembali</a></div>";
       }
?>