<?php

$koneksi = mysqli_connect("localhost", "root", "", "multimedia11_2");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
