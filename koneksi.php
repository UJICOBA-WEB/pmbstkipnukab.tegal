<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "nama_basis_data_baru";

$kon = mysqli_connect($host, $user, $password, $db);

if (!$kon) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>
