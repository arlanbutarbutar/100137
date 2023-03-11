<?php
   require_once("koneksi.php");
   $id_satker = $_POST['id_satker'];
   $nama_satker = $_POST['nama_satker'];
   $sql = "SELECT * FROM satker WHERE id_satker = '$id_satker'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Satker Sudah Ada! <a href='satker.php'>Back</a></div>";
   } else {
     if(!$id_satker || !$nama_satker ) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='tambah_satker.php'>Back</a>";
     } else {
       $data = "INSERT INTO satker (id_satker, nama_satker) VALUES ('$id_satker', '$nama_satker')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         header('location:satker.php?pesan=satker-berhasil-tersimpan');
       } else {
         header('location:tambah_satker.php?pesan=satker-Gagal-disimpan');
       }
     }
   }
?>