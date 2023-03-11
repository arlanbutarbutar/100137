<?php
        include "config.php";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $u = $_POST['username'];
            $p = $_POST['password'];

            $qCek = mysqli_query($koneksi, "SELECT * FROM personil WHERE username='$u' AND password='$p'");

            if (mysqli_num_rows($qCek) > 0) {
                $d = mysqli_fetch_array($qCek);
                session_start();
                $_SESSION['login'] = 'OK';
                $_SESSION['nrp'] = $d['nrp'];
                $_SESSION['username'] = $d['username'];
                $_SESSION['nama_lengkap'] = $d['nama'];
                $_SESSION['level'] = $d['level'];
                header('Location:index.php');
            } else {
                echo "<center><font color='red'><small>Username / Password Salah!</small></font></center>";
            }
        }
        ?>

        <?php
        include "config.php";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nrp = $_POST['nrp'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $tlp = $_POST['tlp'];
            $jabatan = $_POST['jabatan'];
            $pangkat = $_POST['pangkat'];
            $satker = $_POST['satker'];
            $penugasan = $_POST['level'];
            $sql = "SELECT * FROM personil WHERE nrp = '$nrp'";
            $query = $koneksi->query($sql);
        if($query->num_rows != 0) {
            echo "<div align='center'>Personil Sudah Terdaftar!</div>";
        } else {
        if(!$nrp || !$nama ) {
       echo "<div align='center'>Masih ada data yang kosong!";
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
} ?>

<!-- action edt
    <?php
      include "config.php";
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
       }
   
} ?>
<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Laporan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="" class="dropdown-item">Laporan Anggota</a>
                            <a href="" class="dropdown-item">Laporan Surat Perintah</a>
                            <a href="" class="dropdown-item">Laporan Penugasan</a>
                            <a href="" class="dropdown-item">Laporan Operasi</a>
                        </div>
                    </div> 
 Action Edit end -->