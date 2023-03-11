<?php
//cek login
session_start();
if (!isset($_SESSION['login'])) {
  header('location:login.php');
}
include "config.php";

if (isset($_POST['ubah-profile'])) {
  $nrp = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_SESSION['nrp']))));
  $nama = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_POST['nama']))));
  $jk = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_POST['jk']))));
  $alamat = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_POST['alamat']))));
  $tlp = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_POST['tlp']))));
  $id_pangkat = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_POST['id-pangkat']))));
  $id_satker = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_POST['id-satker']))));
  $id_jabatan = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_POST['id-jabatan']))));
  mysqli_query($koneksi, "UPDATE personil SET nama='$nama', jenis_kelamin='$jk', alamat='$alamat', tlp='$tlp', id_pangkat='$id_pangkat', id_jabatan='$id_jabatan' WHERE nrp='$nrp'");
  echo "<script>alert('Berhasil mengubah data profil.'); window.location.href='profil.php';</script>";
}
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

      <!-- dashboard kasat Start -->
      <div class="container-fluid pt-4 px-4 h-100">
        <div class="row g-4">
          <div class="col-sm-12 col-md-6 col-xl-6">
            <div class="h-100 bg-secondary rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <h6 class="mb-0">Profil Saya</h6>
                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ubah"><i class="bi bi-pencil-square"></i> Ubah</a>
                <div class="modal fade" id="ubah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0 shadow">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Profil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="" method="post">
                        <?php $nrp = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_SESSION['nrp']))));
                        $myData = mysqli_query($koneksi, "SELECT * FROM personil WHERE nrp='$nrp'");
                        $data = mysqli_fetch_assoc($myData);
                        ?>
                        <div class="modal-body">
                          <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" id="nama" placeholder="Nama" required>
                          </div>
                          <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select name="jk" class="form-select" required>
                              <option selected value="">Pilih Jenis Kelamin</option>
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="form-control" id="alamat" placeholder="Alamat" required>
                          </div>
                          <div class="mb-3">
                            <label for="tlp" class="form-label">Telepon</label>
                            <input type="number" name="tlp" value="<?= $data['tlp'] ?>" class="form-control" id="tlp" placeholder="Telepon" required>
                          </div>
                          <div class="mb-3">
                            <label for="id-pangkat" class="form-label">Pangkat</label>
                            <select name="id-pangkat" class="form-select" required>
                              <option selected value="">Pilih Pangkat</option>
                              <?php $pangkat = mysqli_query($koneksi, "SELECT * FROM pangkat");
                              foreach ($pangkat as $data_p) : ?>
                                <option value="<?= $data_p['id_pangkat'] ?>"><?= $data_p['nama_pangkat'] ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="id-satker" class="form-label">Satker</label>
                            <select name="id-satker" class="form-select" required>
                              <option selected value="">Pilih Satker</option>
                              <?php $satker = mysqli_query($koneksi, "SELECT * FROM satker");
                              foreach ($satker as $data_s) : ?>
                                <option value="<?= $data_s['id_satker'] ?>"><?= $data_s['nama_satker'] ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="id-jabatan" class="form-label">Jabatan</label>
                            <select name="id-jabatan" class="form-select" required>
                              <option selected value="">Pilih Jabatan</option>
                              <?php $jabatan = mysqli_query($koneksi, "SELECT * FROM jabatan");
                              foreach ($jabatan as $data_j) : ?>
                                <option value="<?= $data_j['id_jabatan'] ?>"><?= $data_j['nama_jabatan'] ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="modal-footer border-top-0 justify-content-center">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button type="submit" name="ubah-profile" class="btn btn-warning">Ubah</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              $nrp = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($koneksi, $_SESSION['nrp']))));
              $query = mysqli_query($koneksi, "SELECT * FROM personil WHERE nrp='$nrp'");
              $data = mysqli_fetch_array($query);
              ?>
              <div class="d-flex border-bottom py-3">
                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-0"><?php echo $data['nama']; ?></h6>
                    <small><?php echo $data['id_jabatan']; ?></small>
                  </div>
                  <p class="mb-0">Jenis Kelamin : <?= $data['jenis_kelamin'] ?></p>
                  <p class="mb-0">Alamat : <?= $data['alamat'] ?></p>
                  <p class="mb-0">Telp : <?= $data['tlp'] ?></p>
                  <p class="mb-0">Pangkat : <?= $data['id_pangkat'] ?></p>
                  <p class="mb-0">Jabatan : <?= $data['id_jabatan'] ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- dashboard kasat End -->

      <!-- Footer Start -->
      <div class="container-fluid pt-4 px-4 fi">
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