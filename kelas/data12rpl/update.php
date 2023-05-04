<?php
//koneksi ke database
include 'koneksi.php';

//ambil data dari formulir
$id = $_POST['id'];
$table_name = $_POST['table_name'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];

//buat query update data
$query = "UPDATE $table_name SET nama='$nama', tanggal='$tanggal', keterangan='$keterangan' WHERE id=$id";

//eksekusi query update data
if (mysqli_query($koneksi, $query)) {
    //jika berhasil update data, arahkan kembali ke halaman utama
    header("Location: data12rpl.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

//tutup koneksi database
mysqli_close($koneksi);
