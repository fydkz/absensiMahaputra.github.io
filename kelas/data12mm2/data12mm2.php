<?php
	
  session_start();
  if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
	include "koneksi.php";
	
    $tgl=date("d-m-Y");
	
	
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
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
          <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Mahaputra Absensi </div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item">
          <a class="nav-link" href="../../index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
              <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
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
                  <a href="../../index.php" id="userDropdown" role="button">
                  <i class="fa fa-home"> home</i>
                  </a>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
          <h2 class="h3 mb-4 text-gray-800">Data Absensi Siswa Kelas 12 RPL</h2>
          <div class="card shadow mb-4">
            <?php
            include 'koneksi.php';
              if (!$koneksi) {
                  die("Koneksi gagal: " . mysqli_connect_error());
              }

              $query = "SHOW TABLES LIKE 'table_%'";
              $tables = mysqli_query($koneksi, $query);

              if (mysqli_num_rows($tables) > 0) {
                echo "<br>";
                echo "<a href='hapussemua.php' onclick=\"return confirm('Apakah Anda yakin ingin menghapus semua tabel beserta datanya?')\" class=\"btn btn-primary\"  >Hapus semua tabel</a> <br><br>";
              while ($table = mysqli_fetch_array($tables)) {
                  $table_name = $table[0];
                  $query = "SELECT * FROM $table_name";
                  $result = mysqli_query($koneksi, $query);

                  $tanggal = date("d-m-Y", strtotime(substr($table_name, 6)));
                
            ?>
      <div class="card-body">             
        <div class="table-responsive">
            <table class="table table-bordered table-striped"  id="mauexport" width="100%" cellspacing="0">
              <thead>
                <tr align="center">
                  
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody align="center">
                      <?php 
                      echo "<br>";
                      echo "<h6 class=\"display-5 text-muted\"> Absensi Tanggal: $tanggal 
                      <a href='hapus.php?table=" . $table_name . "' onclick=\"return confirm('Apakah Anda yakin ingin menghapus tabel ini beserta semua datanya?')\" class=\"fas fa-trash\" > Hapus tabel</a>
                      <a href='export.php?table=". $table_name ."' class='fas fa-file' style='margin-left: 10px' > rekap table</a>
                      </h6>";
                      
                    echo "<hr>";
                      $id = 1;
                          while ($row = mysqli_fetch_array($result)) {
                              echo "<tr>";
                                echo "<td>" . $id . "</td>";
                                echo "<td>" . date("d-m-Y", strtotime($row['tanggal'])) . "</td>";
                                echo "<td>" . $row['nama'] . "</td>";
                                echo "<td>" . $row['keterangan'] . "</td>";
                                echo 
                                "<td>
                                  <a href='delete.php?id=" . $row['id'] . "&table=" . $table_name . "' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\" class=\"fas fa-trash\" ></a>

                                  <a href='detaileditabsensi.php?id=" . $row['id'] . "&table=" . $table_name . "' onclick=\"return confirm('Apakah Anda yakin ingin mengedit data ini?')\"class=\"fas fa-edit\" >
                                  </a>
                                </td>";
                                $id++;
                              echo "</tr>";
                            
                          } 
                      }
                      ?>
                </tbody>
              </table>
            </div>
          </div>
                <?php
                  } else {
                      //jika tidak ada tabel yang tersedia
                      echo '<div class="alert alert-danger text-center" role="alert"><i class=""></i> Tidak ada data yang tersedia.</div>';

                  }
                  ?>
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

</html>
