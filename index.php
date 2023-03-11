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
  <!-- Sidebar Start -->
  <div class="container-fluid position-relative d-flex p-0">
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
            <a href="index.php" class="nav-item nav-link active"><i class="fa fa-home"></i>Dashboard</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Personil</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="personil.php" class="dropdown-item">Daftar Anggota</a>
                <a href="tambah_personil.php" class="dropdown-item">Tambah Anggota</a>
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
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-envelope me-2"></i>Operasi</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="operasi.PHP" class="dropdown-item">Daftar Operasi</a>
                <a href="tambah_operasi.php" class="dropdown-item">Tambah Operasi</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-edit me-2"></i>Penugasan</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="tugas.php" class="dropdown-item">Daftar Penugasan</a>
                <a href="tambah_tugas.php" class="dropdown-item">Tambah Penugasan</a>
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
            <a href="index.php" class="nav-item nav-link active"><i class="fa fa-home"></i>Dashboard</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Personil</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="personil.php" class="dropdown-item">Daftar Anggota</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bars me-2"></i>Pangkat</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="pangkat.php" class="dropdown-item">Daftar Pangkat</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-keyboard me-2"></i>Satuan Kerja</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="satker.php" class="dropdown-item">Daftar Satuan Kerja</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-chart-line me-2"></i>Jabatan</a>
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
            <a href="index.php" class="nav-item nav-link active"><i class="fa fa-home"></i>Dashboard</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Personil</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="personil.php" class="dropdown-item">Daftar Anggota</a>
                <!-- <a href="tambah_personil.php" class="dropdown-item">Tambah Anggota</a> -->
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-envelope me-2"></i>Operasi</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="operasi.PHP" class="dropdown-item">Daftar Operasi</a>
                <!-- <a href="tambah_operasi.php" class="dropdown-item">Tambah Operasi</a> -->
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-edit me-2"></i>Penugasan</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="tugas.php" class="dropdown-item">Daftar Penugasan</a>
                <!-- <a href="tambah_tugas.php" class="dropdown-item">Tambah Penugasan</a> -->
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-alt me-2"></i>Surat Perintah</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="sprint.php" class="dropdown-item">Daftar Surat Perintah</a>
                <!-- <a href="tambah_sprint.php" class="dropdown-item">Tambah Surat Perintah</a> -->
              </div>
            </div>

          </div>
        <?php } ?>
        <!-- menu kasat end -->
        <!-- tanda -->
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
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
              <span class="d-none d-lg-inline-flex"><?= $_SESSION['nama_lengkap']; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
              <a href="profil.php" class="dropdown-item">My Profile</a>
              <a href="logout.php" class="dropdown-item">Log Out</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->


      <!-- Sale & Revenue Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-user fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Personil</p>
                <?php
                $data_personil = mysqli_query($koneksi, "SELECT * FROM personil");
                $jumlah_personil = mysqli_num_rows($data_personil);
                ?>

                <h6 class="mb-0"><?php echo $jumlah_personil; ?></h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-bar fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Operasi</p>
                <?php
                $data_operasi = mysqli_query($koneksi, "SELECT * FROM Operasi");
                $jumlah_operasi = mysqli_num_rows($data_operasi);
                ?>

                <h6 class="mb-0"><?php echo $jumlah_operasi; ?></h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-bar fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Penugasan</p>
                <?php
                $data_tugas = mysqli_query($koneksi, "SELECT * FROM tugas");
                $jumlah_tugas = mysqli_num_rows($data_tugas);
                ?>

                <h6 class="mb-0"><?php echo $jumlah_tugas; ?></h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-file-alt fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Surat Perintah</p>
                <?php
                $data_sprint = mysqli_query($koneksi, "SELECT * FROM sprint");
                $jumlah_sprint = mysqli_num_rows($data_sprint);
                ?>
                <h6 class="mb-0"><?php echo $jumlah_sprint; ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sale & Revenue End -->


      <!-- Sales Chart Start -->

      <!-- Sales Chart End -->


      <!-- Recent Sales Start -->

      <!-- Recent Sales End -->


      <!-- dashboard ADMIN Start -->
      <?php if ($_SESSION['level'] == 'admin') { ?>
        <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
              <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h6 class="mb-0">Profil Anggota</h6>
                </div>
                <?php
                $urutan = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM  personil LIMIT 5");
                while ($data = mysqli_fetch_array($query)) {
                  $urutan++;
                ?>
                  <div class="d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                      <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-0"><?php echo $data['nama']; ?></h6>
                        <small><?php echo $data['id_jabatan']; ?></small>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
              <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Calender</h6>
                </div>
                <div id="calender"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
              <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Operasi</h6>
                </div>
                <?php
                $urutan = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM  operasi");
                while ($data = mysqli_fetch_array($query)) {
                  $urutan++;
                ?>
                  <div class="d-flex align-items-center border-bottom py-2">
                    <div class="w-100 ms-3">
                      <div class="d-flex w-100 align-items-center justify-content-between">
                        <span><?php echo $data['nama_operasi']; ?></span>
                      </div>
                    </div>
                  </div>
                <?php
                } ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- dashboard admin End -->

      <!-- dashboard kasat Start -->
      <?php if ($_SESSION['level'] == 'kasat') { ?>
        <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
              <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h6 class="mb-0">Profil Anggota</h6>
                </div>
                <?php
                $urutan = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM  personil LIMIT 5");
                while ($data = mysqli_fetch_array($query)) {
                  $urutan++;
                ?>
                  <div class="d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                      <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-0"><?php echo $data['nama']; ?></h6>
                        <small><?php echo $data['id_jabatan']; ?></small>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
              <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Calender</h6>
                </div>
                <div id="calender"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
              <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Operasi</h6>
                </div>
                <?php
                $urutan = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM  operasi");
                while ($data = mysqli_fetch_array($query)) {
                  $urutan++;
                ?>
                  <div class="d-flex align-items-center border-bottom py-2">
                    <div class="w-100 ms-3">
                      <div class="d-flex w-100 align-items-center justify-content-between">
                        <span><?php echo $data['nama_operasi']; ?></span>
                      </div>
                    </div>
                  </div>
                <?php
                } ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- dashboard kasat End -->

      <!-- dashboard Anggota Start -->
      <?php if ($_SESSION['level'] == 'anggota') { ?>
        <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
              <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h6 class="mb-0">Profil Anggota</h6>
                </div>
                <?php
                $nrp = $_SESSION['nrp'];
                $urutan = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM  personil WHERE nrp = '$nrp'");
                while ($data = mysqli_fetch_array($query)) {
                  $urutan++;
                ?>
                  <div class="d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                      <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-0"><?php echo $data['nama']; ?></h6>
                        <small><?php echo $data['id_jabatan']; ?></small>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
              <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Calender</h6>
                </div>
                <div id="calender"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
              <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Operasi</h6>
                </div>
                <?php
                $nrp = $_SESSION['nrp'];
                $urutan = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM  tampilsprint WHERE nrp = '$nrp'");
                while ($data = mysqli_fetch_array($query)) {
                  $urutan++;
                ?>
                  <div class="d-flex align-items-center border-bottom py-2">
                    <div class="w-100 ms-3">
                      <div class="d-flex w-100 align-items-center justify-content-between">
                        <span><?php echo $data['nama_operasi']; ?></span>
                      </div>
                    </div>
                  </div>
                <?php
                } ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- dashboard anggota End -->

      <!-- Footer Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded-top p-4">
          <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
              &copy; <a href="#">MINTU RESKRIM POLRES KUPANG KOTA</a>, All Right Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
              Designed By <a href="#">LIF</a>
              <br>Distributed By: <a href="#" target="_blank">LIF</a>
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