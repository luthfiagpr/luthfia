<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_penjualan_buku";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("koneksi error:".mysqli.connect.error());
} 

?>