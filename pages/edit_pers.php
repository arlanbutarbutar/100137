<?php
include "koneksi.php";
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
    <?php 
    session_start();
    if($_SESSION['status']!="Online"){
        header("location:index.php?pesan=belum_login");
    }
    ?>
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
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>MINTU RESKRIM</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['username']; ?></h6>
                        <span><?php echo $_SESSION['status']; ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="Beranda.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="#" class="nav-item nav-link active"><i class="fa fa-user me-2"></i>Personil</a>
                    <a href="Pangkat.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Pangkat</a>
                    <a href="Satker.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Satuan Kerja</a>
                    <a href="Jabatan.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Jabatan</a>
                    <a href="sprint.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Surat Perintah</a>
                    <a href="penugasan.php" class="nav-item nav-link"><i class="fa fa-file-alt me-2"></i>Penugasan</a>
                    <a href="Operasi.php" class="nav-item nav-link"><i class="fa fa-bars"></i>Operasi</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
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
                        
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['username']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit Personil</h6>
                            <form method="POST" action="act_Epers.php">
                            <?php
                                    
                                    $nrp = $_GET['nrp'];
                                    $qry = mysqli_query($koneksi,"select * from personil where nrp='$nrp'");
                                    while($data = mysqli_fetch_array($qry)){
                                        ?>
                            
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <input name="nrpawal" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['nrp']; ?>">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NRP</label>
                                    <input name="nrp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['nrp']; ?>">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Personil</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['nama']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                        <option selected value="<?php echo $data['jenis_kelamin']; ?>"><?php echo $data['jenis_kelamin']; ?></option><br>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['alamat']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                    <input name="tlp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['tlp']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                    <select name="jabatan" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                        <?php
                                    
                                    $nrp = $_GET['nrp'];
                                    $id_jabatan = $_GET['id_jabatan'];
                                    $sql = mysqli_query($koneksi,"select personil.nrp, jabatan.id_jabatan, jabatan.nama_jabatan from personil, jabatan where personil.nrp ='$nrp' and jabatan.id_jabatan = '$id_jabatan'");
                                    while($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <option selected value="<?php echo $data['id_jabatan']; ?>"><?php echo $data['nama_jabatan']; ?></option>
                                        <?php 
                                        }
                                            ?>

                                        <?php
                                                    $kon = mysqli_connect("localhost",'root',"","mintu_reskrim");
                                                    if (!$kon){
                                                        die("Koneksi database gagal:".mysqli_connect_error());
                                                    }
                                                    $sql="select * from jabatan";
                                                    $hasil=mysqli_query($kon,$sql);
                                                    $no=0;
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        $no++;
                                                        ?>
                                        
                                        <option value="<?php echo $data['id_jabatan'];?>"><?php echo $data['nama_jabatan'];?></option>
                                        <?php 
                                        }
                                            ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pangkat</label>
                                    <select name="pangkat" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                        <?php
                                    
                                    $nrp = $_GET['nrp'];
                                    $id_pangkat = $_GET['id_pangkat'];
                                    $sql = mysqli_query($koneksi,"select personil.nrp, pangkat.id_pangkat, pangkat.nama_pangkat from personil, pangkat where personil.nrp ='$nrp' and pangkat.id_pangkat = '$id_pangkat'");
                                    while($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <option selected value="<?php echo $data['id_pangkat']; ?>"><?php echo $data['nama_pangkat']; ?></option>
                                        <?php 
                                        }
                                            ?>

                                        <?php
                                                    $kon = mysqli_connect("localhost",'root',"","mintu_reskrim");
                                                    if (!$kon){
                                                        die("Koneksi database gagal:".mysqli_connect_error());
                                                    }
                                                    $sql="select * from pangkat";
                                                    $hasil=mysqli_query($kon,$sql);
                                                    $no=0;
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        $no++;
                                                        ?>
                                        
                                        <option value="<?php echo $data['id_pangkat'];?>"><?php echo $data['nama_pangkat'];?></option>
                                        <?php 
                                        }
                                            ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Satuan Kerja</label>
                                    <select name="satker" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                        <?php
                                    
                                    $nrp = $_GET['nrp'];
                                    $id_satker = $_GET['id_satker'];
                                    $sql = mysqli_query($koneksi,"select personil.nrp, satker.id_satker, satker.nama_satker from personil, satker where personil.nrp ='$nrp' and satker.id_satker = '$id_satker'");
                                    while($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <option selected value="<?php echo $data['id_satker']; ?>"><?php echo $data['nama_satker']; ?></option>
                                        <?php 
                                        }
                                            ?>
                                        
                                        <?php
                                                    $kon = mysqli_connect("localhost",'root',"","mintu_reskrim");
                                                    if (!$kon){
                                                        die("Koneksi database gagal:".mysqli_connect_error());
                                                    }
                                                    $sql="select * from satker";
                                                    $hasil=mysqli_query($kon,$sql);
                                                    $no=0;
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        $no++;
                                                        ?>
                                        <option value="<?php echo $data['id_satker'];?>"><?php echo $data['nama_satker'];?></option>
                                        <?php 
                                        }
                                            ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Operasi</label>
                                    <select name="operasi" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <?php
                                    $nrp = $_GET['nrp'];
                                    $id_operasi = $_GET['id_operasi'];
                                    $sql = mysqli_query($koneksi,"select personil.nrp, operasi.id_operasi, operasi.nama_operasi from personil, operasi where personil.nrp ='$nrp' and operasi.id_operasi = '$id_operasi'");
                                    while($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <option selected value="<?php echo $data['id_pangkat']; ?>"><?php echo $data['nama_pangkat']; ?></option>
                                        <?php 
                                        }
                                            ?>
                                        
                                        <?php
                                                    $kon = mysqli_connect("localhost",'root',"","mintu_reskrim");
                                                    if (!$kon){
                                                        die("Koneksi database gagal:".mysqli_connect_error());
                                                    }
                                                    $sql="select * from operasi";
                                                    $hasil=mysqli_query($kon,$sql);
                                                    $no=0;
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        $no++;
                                                        ?>
                                        <option value="<?php echo $data['id_operasi'];?>"><?php echo $data['nama_operasi'];?></option>
                                        <?php 
                                        }
                                            ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Penugasan</label>
                                    <select name="penugasan" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                        <?php
                                    
                                    $nrp = $_GET['nrp'];
                                    $id_penugasan = $_GET['id_penugasan'];
                                    $sql = mysqli_query($koneksi,"select personil.nrp, penugasan.id_penugasan from personil, penugasan where personil.nrp ='$nrp' and penugasan.id_penugasan = '$id_penugasan'");
                                    while($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <option selected value="<?php echo $data['id_pangkat']; ?>"><?php echo $data['nama_pangkat']; ?></option>
                                        <?php 
                                        }
                                            ?>

                                        <?php
                                                    $kon = mysqli_connect("localhost",'root',"","mintu_reskrim");
                                                    if (!$kon){
                                                        die("Koneksi database gagal:".mysqli_connect_error());
                                                    }
                                                    $sql="select * from penugasan";
                                                    $hasil=mysqli_query($kon,$sql);
                                                    $no=0;
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        $no++;
                                                        ?>
                                        <option value="<?php echo $data['id_penugasan'];?>"><?php echo $data['id_penugasan'];?></option>
                                        <?php 
                                        }
                                            ?>
                                    </select>
                                </div>
                                <button value="EDIT" type="submit" class="btn btn-primary">SIMPAN</button>
                            
                            <?php 
                                }
                                ?>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                    
                    
                </div>
            </div>
            <!-- Widgets End -->


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