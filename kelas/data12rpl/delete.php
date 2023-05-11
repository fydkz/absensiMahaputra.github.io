<?php
//koneksi ke database
include 'koneksi.php';

//cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//cek apakah parameter id dan table ada
if(isset($_GET['id']) && isset($_GET['table'])) {
    //terima data dari parameter
    $id = $_GET['id'];
    $table_name = $_GET['table'];

    //buat query SQL untuk menghapus data dengan id tertentu dari tabel yang dimaksud
    $query = "DELETE FROM $table_name WHERE id = $id";

    //jalankan query
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
} else {
    echo "Data yang dimaksud tidak ditemukan";
}

//tutup koneksi
mysqli_close($koneksi);

header("location: data12rpl.php");
