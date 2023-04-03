<?php
require "koneksi.php";
$id_transaksi = $_POST['id_transaksi'];
$id_customer = $_POST['id_customer'];
$id_buku = $_POST['id_buku'];
$kuantitas = $_POST['kuantitas'];

$sql = "SELECT harga from buku WHERE id_buku = '$id_buku'";
var_dump($sql);
$result = mysqli_query($conn, $sql);
echo "<br>" ;

while ($row = mysqli_fetch_array($result)):
    var_dump($row);
    echo "<br>";
    $harga = $row['harga'];
    $total_harga = $_POST['kuantitas']*$row['harga'];
    var_dump($total_harga);

    $query = "UPDATE transaksi SET id_customer = '$id_customer', id_buku = '$id_buku', kuantitas = '$kuantitas', harga = '$harga', total_pembayaran = '$total_harga' WHERE id_transaksi = '$id_transaksi'";
    var_dump($query);
    $hasil = mysqli_query($conn, $query);
    if($hasil){
        header ("location:data_transaksi.php");
    }
endwhile;
?>