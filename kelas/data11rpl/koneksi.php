<?php

$koneksi = mysqli_connect("localhost", "root", "", "rpl11");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
