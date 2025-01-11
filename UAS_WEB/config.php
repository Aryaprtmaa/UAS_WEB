<?php

// Informasi koneksi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'cart_db';

// Membuat koneksi ke MySQL
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
