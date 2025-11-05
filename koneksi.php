<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kinara_laundry";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>