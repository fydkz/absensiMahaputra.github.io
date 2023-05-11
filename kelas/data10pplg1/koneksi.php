<?php

$koneksi = mysqli_connect("localhost", "root", "", "pplg1");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
