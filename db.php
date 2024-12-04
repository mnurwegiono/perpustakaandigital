<?php
$servername = "localhost";
$username = "root";  // ganti dengan username MySQL Anda
$password = "";      // ganti dengan password MySQL Anda
$dbname = "PerpustakaanDigital";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
