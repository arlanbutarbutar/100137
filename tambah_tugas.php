<?php
//cek login
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
}
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MINTU RESKRIM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
     <!-- 
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
      -->
    <?php
        include "config.php";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_tugas = $_POST['id_tugas'];
   $tempat = $_POST['tempat'];
   $tanggal = $_POST['tanggal'];
   $lama_tugas = $_POST['lama_tugas'];
   $status = $_POST['status'];
   $sql = "SELECT * FROM tugas WHERE id_tugas = '$id_tugas'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Tugas Sudah Ada! <a href='tugas.php'>Back</a></div>";
   } else {
     if(!$id_tugas || !$tempat ) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='tambah_tugas.php'>Back</a>";
     } else {
       $data = "INSERT INTO tugas (id_tugas, tempat, tanggal, lama_tugas, status) VALUES ('$id_tugas', '$tempat', '$tanggal', '$lama_tugas', 'status')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         header('location:tugas.php?pesan=Tugas-berhasil-tersimpan');
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
} ?>
   
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>MintuRes</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?= $_SESSION['nama_lengkap']; ?></h6>
                        <span><?= $_SESSION['level']; ?></span>
                    </div>
                </div>
                <!-- menu admin start -->
                <?php if ($_SESSION['level'] == 'admin') { ?>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-home"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Personil</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="personil.php" class="dropdown-item ">Daftar Anggota</a>
                            <a href="tambah_personil.php" class="dropdown-item ">Tambah Anggota</a>
                        </div>
                    </div>  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bars me-2"></i>Pangkat</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="pangkat.php" class="dropdown-item">Daftar Pangkat</a>
                            <a href="tambah_pangkat.php" class="dropdown-item">Tambah Pangkat</a>
                        </div>
                    </div>  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-keyboard me-2"></i>Satuan Kerja</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="satker.php" class="dropdown-item">Daftar Satuan Kerja</a>
                            <a href="tambah_satker.php" class="dropdown-item">Tambah Satuan Kerja</a>
                        </div>
                    </div> 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-chart-line me-2"></i>Jabatan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="jabatan.php" class="dropdown-item">Daftar Jabatan</a>
                            <a href="tambah_jabatan.php" class="dropdown-item">Tambah Jabatan</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-envelope me-2"></i>Operasi</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="operasi.PHP" class="dropdown-item">Daftar Operasi</a>
                            <a href="tambah_operasi.php" class="dropdown-item ">Tambah Operasi</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-user-edit me-2"></i>Penugasan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="tugas.php" class="dropdown-item">Daftar Penugasan</a>
                            <a href="tambah_tugas.php" class="dropdown-item active">Tambah Penugasan</a>
                        </div>
                    </div>                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-alt me-2"></i>Surat Perintah</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="sprint.php" class="dropdown-item">Daftar Surat Perintah</a>
                            <a href="tambah_sprint.php" class="dropdown-item">Tambah Surat Perintah</a>
                        </div>
                    </div>
                    
                </div>
                <?php } ?>   
        <!-- menu admin end -->

        <!-- menu anggota start -->
        <?php if ($_SESSION['level'] == 'anggota') { ?>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="fa fa-home"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Personil</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="personil.php" class="dropdown-item ">Daftar Anggota</a>
                        </div>
                    </div>  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bars me-2"></i>Pangkat</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="pangkat.php" class="dropdown-item ">Daftar Pangkat</a>
                        </div>
                    </div>  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-keyboard me-2"></i>Satuan Kerja</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="satker.php" class="dropdown-item">Daftar Satuan Kerja</a>
                        </div>
                    </div> 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-chart-line me-2"></i>Jabatan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="jabatan.php" class="dropdown-item">Daftar Jabatan</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-alt me-2"></i>Surat Tugas</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="sprint.php" class="dropdown-item">Daftar Surat Perintah</a>
                        </div>
                    </div> 
                </div>
                <?php } ?>  
        <!-- menu anggota end -->
        <!-- menu kasat start -->
        <?php if ($_SESSION['level'] == 'kasat') { ?>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="fa fa-home"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Personil</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="personil.php" class="dropdown-item ">Daftar Anggota</a>
                            <a href="tambah_personil.php" class="dropdown-item">Tambah Anggota</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-envelope me-2"></i>Operasi</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="operasi.PHP" class="dropdown-item">Daftar Operasi</a>
                            <a href="tambah_operasi.php" class="dropdown-item">Tambah Operasi</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-user-edit me-2"></i>Penugasan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="tugas.php" class="dropdown-item">Daftar Penugasan</a>
                            <a href="tambah_tugas.php" class="dropdown-item active">Tambah Penugasan</a>
                        </div>
                    </div>  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-alt me-2"></i>Surat Perintah</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="sprint.php" class="dropdown-item">Daftar Surat Perintah</a>
                            <a href="tambah_sprint.php" class="dropdown-item">Tambah Surat Perintah</a>
                        </div>
                    </div>                    
                    
                </div>
                <?php } ?>  
        <!-- menu kasat end -->



            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <?php if ($_SESSION['level'] == 'anggota') { ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Kotak Masuk</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Perihal</h6>
                                        <small>Tanggal</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                        </div>
                    </div>
                    <?php } ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?= $_SESSION['nama_lengkap']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- navbar End -->
            <!-- Tambah Personil Start -->
            
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Penugasan</h6>
                            <form method="POST" action="">
                            <div class="form-floating mb-3">
                                <input name="id_tugas" type="text" class="form-control" id="id_tugas"
                                    placeholder="id_tugas">
                                <label for="nrp">ID Tugas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="tempat" type="text" class="form-control" id="tempat"
                                    placeholder="Tempat">
                                <label for="nama">Tempat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="tanggal" type="date" class="form-control" id="tanggal"
                                    placeholder="tanggal">
                                <label for="tanggal">Tanggal</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="lama_tugas" type="text" class="form-control" id="lama_tugas"
                                    placeholder="Lama Tugas">
                                <label for="lama_tugas">Lama Tugas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select name="status" class="form-select" id="floatingSelect"
                                    aria-label="status">
                                    <option selected>-Status-</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak aktif">Tidak Aktif</option>
                                </select>
                                <label for="jenis kelamin">Status</label>
                            </div>
                            <div class="m-n2">
                                <button value="submit" type="submit" class="btn btn-outline-success m-2">Simpan</button>
                            </div>
                        </form>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tambah Personil End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">DSAB</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            
                            Designed By <a href="#">FatuImen</a>
                            <br>Distributed By: <a href="#" target="_blank">FatuImen</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>