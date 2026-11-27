<?php
// config/database.php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'apk_penjualan';

// Inisialisasi koneksi dengan MySQLi secara Object Oriented
$koneksi = new mysqli($host, $user, $pass, $db);

if($koneksi->connect_error) {
    die("koneksi database gagal: " .$koneksi->connect_error);
}

$koneksi->set_charset("utf8mb4");

?> 