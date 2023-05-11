<?php

$koneksi = mysqli_connect("localhost", "root", "", "pplg2");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
