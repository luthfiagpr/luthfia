<?php
require "koneksi.php";

$id_buku = $_GET["id_buku"];
$sql = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)):
?>

<!DOCTYPE html>
<head></head>
<body>
    <h2> Edit Data Buku </h2>
    <form action="edit_buku.php" method="post">
        <input type="hidden" id="" name="id_buku" value="<?=$row['id_buku']?>" /><br>
        <label for="judul">Judul Buku</label>
        <input type="text" id="judul" name="judul" value="<?=$row['judul']?>" /><br>
        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit" value="<?=$row['penerbit']?>" /><br>
        <label for="tahun">Tahun</label>
        <input type="date" id="tahun" name="tahun" value="<?=$row['tahun']?>" /><br>
        <label for="harga">Harga</label>
        <input type="number" id="harga" name="harga" value="<?=$row['harga']?>" /><br>
        <label for="penulis">Penulis</label>
        <input type="text" id="penulis" name="penulis" value="<?=$row['penulis']?>" /><br>
        <input type="Submit" value="edit">
    </form>
    <?php endwhile ?>
</body>
</html>