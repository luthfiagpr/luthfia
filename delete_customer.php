<?php
require "koneksi.php";

$id_customer = $_GET["id_customer"];
$sql = "DELETE FROM customer WHERE id_customer='$id_customer'";
$result = mysqli_query($conn, $sql);

if(!$result) {
    echo "<script>
        alert('gagal hapus');
        location.href = 'data_customer.php';
    </script>";
} else {
    echo "<script>
        alert('berhasil hapus'); 
        location.href = 'data_customer.php';
    </script>";
}
?>