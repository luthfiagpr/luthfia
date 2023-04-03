<?php
require "koneksi.php";

$result_customer = mysqli_query($conn, "SELECT id_customer, nama FROM customer");
$result_buku = mysqli_query($conn, "SELECT id_buku, judul, harga FROM buku");

$options_customer = mysqli_fetch_all($result_customer, MYSQLI_ASSOC );
$options_buku = mysqli_fetch_all($result_buku, MYSQLI_ASSOC );

?>

<DOCTYPE html>
<head></head>
<body>
    <h2> masukan data transaksi </h2>
    <form action="tambah_transaksi.php" method="POST" >
        <label for="nama">Nama Customer</label><br>
        <select name="id_customer" id="nama">
        <option disabled selected>Pilih Nama Customer..</option>
            <?php foreach ($options_customer as $option) { ?>
            <option value="<?=$option['id_customer']?>"><?= $option['nama']?></option>
            <?php } ?>
        </select><br>
        <label for="judul">Judul Buku</label><br>
        <select name="id_buku" id="judul">
        <option disabled selected>Pilih Judul Buku..</option>
            <?php foreach ($options_buku as $option) { ?>
            <option value="<?=$option['id_buku']?>"><?= $option['judul'] . '' . "-Rp " . $option['harga']?></option>
            <?php } ?>
        </select><br>
        <label for="kuantitas">Kuantitas</label><br>
        <input type="number" name="kuantitas" id="kuantitas"/><br>
        <input type="submit" value="Simpan" class="button4">

    </form>
    </body>
    </html>