<?php
include "koneksi.php";
?>
<html>

<head>
    <title>Absensi Mahaputra</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <h2>Absensi Siswa</h2>

        <?php
        //ambil nilai parameter table
        $table_name = $_GET['table'];

        //query untuk merekap data dari tabel tertentu
        $query = "SELECT * FROM $table_name";
        $result = mysqli_query($koneksi, $query);

        //tampilkan data dalam tabel
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered table-striped' id='mauexport'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>Nama</th>";
        echo "<th>Keterangan</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        $id = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['keterangan'] . "</td>";
            echo "</tr>";
            $id++;
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        ?>


    </div>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>