<?php
$host = "localhost";
$user = "root";
$pass = ""; // Sesuaikan jika root ada passwordnya
$db   = "db_pusdikhubad";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
