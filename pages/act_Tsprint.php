<?php
require_once("koneksi.php"); 
        $no_sprint =$_POST['no_sprint'];
        $tanggal_sprint =$_POST['tanggal_sprint'];
        $uud = $_POST['uud'];
        $perihal = $_POST['perihal'];
        $personil_1 = $_POST['personil_1'];
        $keterangan = $_POST['keterangan'];
        
    
    $sql = "SELECT * FROM sprint WHERE no_sprint = '$no_sprint'";
    $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>No Surat Sudah Terdaftar! <a href='sprint.php'>Back</a></div>";
   } else {
     if(!$no_sprint || !$tanggal_sprint ) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='tambah_sprint.php'>Back</a>";
     } else {
       $data = "INSERT INTO sprint (no_sprint, tgl_sprint, uud, perihal, personil_1, keterangan) VALUES ('$no_sprint', '$tanggal_sprint', '$uud', '$perihal', '$personil_1', $keterangan')";
       $simpan = $koneksi->query($data);
       if($simpan) {
        echo "<div align='center'>Surat Perintah Berhasil Di Simpan, <a href='sprint.php'>Lihat</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }   
    ?>