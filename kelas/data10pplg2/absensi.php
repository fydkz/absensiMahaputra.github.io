<?php

include "koneksi.php";
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

  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../../css/styliest.css" rel="stylesheet">
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
        <a class="nav-link" href="../../index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
          </svg>
          <i class="bi bi-calendar-check"></i>
          <span>Absensi Siswa</span>
        </a>
      </li>

      <hr class="sidebar-divider">
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
              <a href="index.php" id="userDropdown" role="button">
                <i class="fa fa-home"> home</i>
              </a>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="mb-5 text-gray-800">Pengisian Absensi</h1>
          <div class="row">
            <div class="col-md-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#rekap" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="rekap">
                  <h6 class="m-0 font-weight-bold text-primary">Menu Pengisian Absensi</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse hide" id="rekap">
                  <div class="card-body">
                    <form role="form" action="insert.php" method="post" name="postform" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama"><br>
                      </div>
                      <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <select id="keterangan" class="form-control" name="keterangan">
                          <option>--</option>
                          <option>Sakit</option>
                          <option>Izin</option>
                          <option>Alfa</option>
                        </select>
                        <br>
                        <div class="form-group">
                          <label>Tanggal:</label>
                          <input type="date" name="tanggal" class="form-control">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                  </div>

                </div>
              </div>
              <a href="data10pplg2.php" class="btn btn-primary">Melihat data</a>

            </div>
          </div>
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


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../js/demo/datatables-demo.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

</body>
</body>

</html>