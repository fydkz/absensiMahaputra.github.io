<?php

$koneksi = mysqli_connect("localhost", "root", "", "data11mm1");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
