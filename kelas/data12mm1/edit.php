<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM `siswa` WHERE `id` = $id");

$tampil = mysqli_fetch_array($data);

?>
<form action="update.php" method="POST">
    <input type="text" name="id" value="<?php echo $id; ?>" hidden=""><br><br>
    <input type="text" name="nama" value="<?php echo $tampil['nama'] ?>"><br><br>
    <input type="text" name="kelas" value="<?php echo $tampil['kelas'] ?>"><br><br>
    <input type="text" name="jurusan" value="<?php echo $tampil['jurusan'] ?>"><br><br>
    <input type="text" name="keterangan" value="<?php echo $tampil['keterangan'] ?>"><br><br>
    <input type="submit" name="submit"><br><br>
</form>