<?php
   require_once("koneksi.php");
   $id_jabatan = $_POST['id_jabatan'];
   $nama_jabatan = $_POST['nama_jabatan'];
   
   $sql = "SELECT * FROM jabatan WHERE id_jabatan = '$id_jabatan'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Jabatan Sudah Ada! <a href='jabatan.php'>Back</a></div>";
   } else {
     if(!$id_jabatan || !$nama_jabatan ) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='tambah_jabatan.php'>Back</a>";
     } else {
       $data = "INSERT INTO jabatan (id_jabatan, nama_jabatan) VALUES ('$id_jabatan', '$nama_jabatan')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         header('location:jabatan.php?pesan=jabatan-berhasil-tersimpan');
       } else {
         header('location:tambah_jabatan.php?pesan=jabatan-Gagal-disimpan');
       }
     }
   }
?>