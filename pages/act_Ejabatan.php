<?php
   require_once("koneksi.php");
   $id_jabatanlama = $_POST['id_jabatanlama']; 
   $id_jabatan = $_POST['id_jabatan'];
   $nama_jabatan = $_POST['nama_jabatan'];
   $sql = "SELECT * FROM jabatan WHERE id_jabatan = '$id_jabatan'";
   $query = $koneksi->query($sql);
   
       $data = "UPDATE jabatan SET id_jabatan = '$id_jabatan', nama_jabatan = '$nama_jabatan' WHERE jabatan.id_jabatan = '$id_jabatanlama'";
       $simpan = $koneksi->query($data);
       if($simpan) {
        header("location:jabatan.php");
       } else {
        echo "<div align='center'>Proses Gagal, <a href='edit_jabatan.php'>Kembali</a></div>";
       }
?>