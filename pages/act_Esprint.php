<?php
   require_once("koneksi.php");
        $no_sprintlama  = $_POST['no_sprintlama'];
        $no_sprint      = $_POST['no_sprint'];
        $tanggal_sprint = $_POST['tanggal_sprint'];
        $uud            = $_POST['uud'];
        $perihal        = $_POST['perihal'];
        $personil_1     = $_POST['personil_1'];
        $keterangan     = $_POST['keterangan'];
   $sql = "SELECT * FROM sprint WHERE no_sprint = '$no_sprint'";
   $query = $koneksi->query($sql);
   
       $data = "UPDATE sprint SET no_sprint = '$no_sprint', tgl_sprint = '$tanggal_sprint', uud = '$uud', perihal = '$perihal', personil_1 = '$personil_1', keterangan = '$keterangan' WHERE sprint.no_sprint = '$no_sprintlama'";
       $simpan = $koneksi->query($data);
       if($simpan) {
        header("location:sprint.php");
       } else {
        echo "<div align='center'>Proses Gagal, <a href='edit_sprint.php'>Kembali</a></div>";
       }
?>