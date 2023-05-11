<?php
//koneksi ke database
include 'koneksi.php';

//cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//buat query SQL untuk menampilkan daftar tabel yang dimulai dengan "table_"
$query = "SHOW TABLES LIKE 'table_%'";
$tables = mysqli_query($koneksi, $query);

//hapus setiap tabel dalam database
while ($table = mysqli_fetch_array($tables)) {
    $table_name = $table[0];
    $query = "DROP TABLE IF EXISTS $table_name";
    mysqli_query($koneksi, $query);
    echo "Tabel $table_name telah dihapus.<br>";
}

//tutup koneksi
mysqli_close($koneksi);
header("location: data10pplg2.php");
