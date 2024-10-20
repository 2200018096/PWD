<?php
$host = "localhost";
$username = "root";
$password = "";
$databasename = "seminar"; // Sesuaikan dengan nama database kamu

$con = mysqli_connect($host, $username, $password, $databasename);

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>
