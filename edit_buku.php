<?php
require "koneksi.php";

$id_buku = $_POST["id_buku"];
$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$penulis = $_POST['penulis'];

$sql = "UPDATE buku SET judul ='$judul', penerbit ='$penerbit', tahun = '$tahun', harga ='$harga', penulis ='$penulis' WHERE id_buku ='$id_buku'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>
        alert('Edit Berhasil');
        location.href = 'data_buku.php';
    </script>";
} else {
    echo "<script>
        alert('Edit Gagal');
        location.href = 'data_buku.php';
    </script>";
}
?>