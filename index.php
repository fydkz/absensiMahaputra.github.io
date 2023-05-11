<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['session_id'])) {
  header('Location: login.php');
}

$conn = mysqli_connect("localhost", "root", "", "login_project");

$query = "SELECT * FROM users WHERE id='$_SESSION[user_id]'";
$result = mysqli_query($conn, $query);

$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Absen | Mahaputra</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/styliest.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mahaputra Absensi </div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
          </svg>
          <i class="bi bi-calendar-check"></i>
          <span>Absensi Siswa</span>
        </a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <li>
              <a href="logout.php" id="userDropdown" role="button">
                <i class="fa fa-sign-out-alt"></i>
              </a>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Absensi Siswa SMK Mahaputra</h1>
          <div class="row">
            <div class="container-fluid">

              <!-- Page Heading -->
              <h1 class="h3 mb-4 text-gray-800"> </h1>
              <div class="col-md-7">
                <!-- DataTales -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Kelas SMK Mahaputra </h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr align="center">
                            <th>No</th>
                            <th>kelas</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody align="center">

                          <tr>
                          <tr>
                            <td>1</td>
                            <td>12 RPL</td>
                            <td><a href="kelas/data12rpl/absensi.php" class="btn btn-success btn-icon-split">
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td>2</td>
                            <td>12 Multimedia 1</td>
                            <td><a href="kelas/data12mm1/absensimm.php" class="btn btn-success btn-icon-split">
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td>3</td>
                            <td>12 Multimedia 2</td>
                            <td><a href="kelas/data12mm2/absensi.php" class="btn btn-success btn-icon-split">
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td>4</td>
                            <td>11 RPL</td>
                            <td><a href="kelas/data11rpl/absensi.php" class="btn btn-success btn-icon-split">
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td>5</td>
                            <td>11 Multimedia 1</td>
                            <td><a href="kelas/data11mm1/absensi.php" class="btn btn-success btn-icon-split">
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td>6</td>
                            <td>11 Multimedia 2</td>
                            <td><a href="kelas/data11mm2/absensi.php" class="btn btn-success btn-icon-split">
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td>7</td>
                            <td>10 PPLG 1</td>
                            <td><a href="kelas/data10pplg1/absensi.php" class="btn btn-success btn-icon-split">
                                </span>
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td>8</td>
                            <td>10 PPLG 2</td>
                            <td><a href="kelas/data10pplg2/absensi.php" class="btn btn-success btn-icon-split">
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td>9</td>
                            <td>10 DKV 1</td>
                            <td><a href="kelas/data10dkv1/absensi.php" class="btn btn-success btn-icon-split">
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td>10</td>
                            <td>10 DKV 2</td>
                            <td><a href="kelas/data10dkv2/absensi.php" class="btn btn-success btn-icon-split">
                                <span class="text">Lihat Detail</span>
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.container-fluid -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>