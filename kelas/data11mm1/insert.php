<?php
//koneksi ke database
include 'koneksi.php';

//cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//terima data dari form
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];

//validasi tanggal
if (!strtotime($tanggal)) {
    echo "Tanggal yang dimasukkan tidak valid";
    exit();
}

//buat tabel jika belum ada
$table_name = "table_" . date("Ymd", strtotime($tanggal)); //nama tabel sesuai dengan tanggal
$query = "CREATE TABLE IF NOT EXISTS $table_name (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(50) NOT NULL,
            tanggal DATE NOT NULL,
            keterangan TEXT NOT NULL
         )";
if (!mysqli_query($koneksi, $query)) {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    exit();
}

//buat query SQL
$query = "INSERT INTO $table_name (nama, tanggal, keterangan) VALUES ('$nama', '$tanggal', '$keterangan')";


if (mysqli_query($koneksi, $query)) {
    $message = "Data berhasil disimpan. Ingin melihat?";
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
