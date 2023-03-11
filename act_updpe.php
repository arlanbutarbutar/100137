<?php
      require_once("koneksi.php");
      
      $nrpawal = $_POST['nrpawal']; 
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
   $sql = "SELECT * FROM personil WHERE nrp = '$nrp'";
   $query = $koneksi->query($sql);
   
       $data = "UPDATE personil SET nrp = '$nrp', nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', tlp = '$tlp', id_pangkat = '$pangkat', id_satker = '$satker', id_jabatan = '$jabatan', username = '$username', password = '$password', level = '$level' WHERE personil.nrp = 'nrpawal'";
       $simpan = $koneksi->query($data);
       if($simpan) {
        header("location:personil.php");
       } else {
        echo "<div align='center'>Proses Gagal, <a href='edit_pers.php'>Kembali</a></div>";
       } ?>