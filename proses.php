<?php
session_start();
include 'koneksi.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    
    header("Location: dashboard.php");
} else {
    echo "<script>
        alert('Login gagal! Username atau password salah.');
        window.location='login.php';
    </script>";
}
?>
