<?php

require "koneksi.php";
$judul_buku = $_POST['judul_buku'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$penulis = $_POST['penulis'];
$sql = "INSERT INTO buku VALUES ('','$judul_buku', '$penerbit', '$tahun', '$harga', '$penulis')";

mysqli_query ($conn, $sql);
header ("location : databuku.php");     

?>