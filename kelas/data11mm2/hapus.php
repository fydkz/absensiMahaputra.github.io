<?php
//koneksi database
include 'koneksi.php';

//ambil parameter table dari GET
$table_name = $_GET['table'];

//hapus tabel
$delete_query = "DROP TABLE $table_name";
if (mysqli_query($koneksi, $delete_query)) {
    echo "<script>alert('Tabel $table_name berhasil dihapus.');window.location='index.php';</script>";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

//tutup koneksi
mysqli_close($koneksi);
header("location: data11mm2.php");
