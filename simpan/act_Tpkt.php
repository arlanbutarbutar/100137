<?php
   require_once("../config.php");
   $nrp = $_POST['nrp'];
   $nama = $_POST['nama'];
   $jenis_kelamin = $_POST['jenis_kelamin'];
   $alamat = $_POST['alamat'];
   $tlp = $_POST['tlp'];
   $jabatan = $_POST['jabatan'];
   $pangkat = $_POST['pangkat'];
   $satker = $_POST['satker'];
   $operasi = $_POST['operasi'];
   $penugasan = $_POST['level'];
   $sql = "SELECT * FROM personil WHERE nrp = '$nrp'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Personil Sudah Terdaftar! <a href='personil.php'>Back</a></div>";
   } else {
     if(!$nrp || !$nama ) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO personil (nrp, nama, jenis_kelamin, alamat, tlp, id_pangkat, id_satker, id_jabatan, username, password, level) VALUES ('$nrp', '$nama', '$jenis_kelamin', '$alamat', '$tlp', '$pangkat', '$satker', '$jabatan', '', '', 'anggota')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         echo "<div align='center'>Anggota Sukses Di Tambahkan, <a href='personil.php'>Lihat</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>