<?php
//koneksi ke database
include 'koneksi.php';

//cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//terima data dari form
$id = $_POST['id'];
$table_name = $_POST['table_name'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];

//validasi input
if (empty($nama) || empty($keterangan)) {
    $error_message = "Nama dan keterangan harus diisi.";
    echo "<script type='text/javascript'>alert('$error_message'); window.history.back();</script>";
    exit();
}

//buat query SQL
$query = "UPDATE $table_name SET nama='$nama', keterangan='$keterangan' WHERE id=$id";

if (mysqli_query($koneksi, $query)) {
    $message = "Data berhasil diupdate. Ingin melihat?";
    echo "<script type='text/javascript'>
            if (confirm('$message')) {
                window.location.href = 'data11mm1.php';
            } else {
                window.history.back();
            }
          </script>";
} else {
    $error_message = "Terjadi kesalahan: " . mysqli_error($koneksi);
    echo "<script type='text/javascript'>alert('$error_message'); window.history.back();</script>";
}

//tutup koneksi
mysqli_close($koneksi);
