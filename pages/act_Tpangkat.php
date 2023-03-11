<?php
   require_once("koneksi.php");
   $id_pangkat = $_POST['id_pangkat'];
   $nama_pangkat = $_POST['nama_pangkat'];
   $sql = "SELECT * FROM pangkat WHERE id_pangkat = '$id_pangkat'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Pangkat Sudah Ada! <a href='pangkat.php'>Back</a></div>";
   } else {
     if(!$id_pangkat || !$nama_pangkat ) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='tambah_pangkat.php'>Back</a>";
     } else {
       $data = "INSERT INTO pangkat (id_pangkat, nama_pangkat) VALUES ('$id_pangkat', '$nama_pangkat')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         header('location:pangkat.php?pesan=Pangkat-berhasil-tersimpan');
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>