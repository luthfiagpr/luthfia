<?php
require "koneksi.php";
$result_customer = mysqli_query($conn, "SELECT id_customer, nama FROM customer");
$result_buku = mysqli_query($conn, "SELECT id_buku, judul, harga FROM buku");

$options_customer = mysqli_fetch_all($result_customer, MYSQLI_ASSOC );
$options_buku = mysqli_fetch_all($result_buku, MYSQLI_ASSOC );

$id_transaksi = $_GET['id_transaksi'];
$sql = "SELECT transaksi.id_transaksi, customer.id_customer, buku.id_buku, customer.nama, buku.judul, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran FROM customer INNER JOIN transaksi ON customer.id_customer = transaksi.id_customer INNER JOIN buku ON buku.id_buku = transaksi.id_buku WHERE transaksi.id_transaksi = '$id_transaksi'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)):
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <form action="edit_transaksi.php" method="post">
        <input type="hidden" name="id_transaksi" value="<?=$row['id_transaksi']?>" />

        <label for="nama">Nama Customer</label>
        <select name="id_customer" id="nama"><?=$row['nama']?>
            <?php foreach ($options_customer as $option) {
                $selected = $option['id_customer']==$row['id_customer'] ? 'selected' : '';
            ?>
            <option value="<?=$option['id_customer']?>" <?= $selected ?>><?=$option['nama']?>
            </option>
            <?php } ?>
        </select><br>

        <label for="judul">Judul Buku</label>
        <select name="id_buku" id="judul"><?=$row['judul']?>
                <?php foreach ($options_buku as $option) {
                    $selected = $option['id_buku']==$row['id_buku'] ? 'selected' : '';
                ?>
                <option value="<?=$option['id_buku']?>" 
                    <?= $selected ?>><?=$option['judul'] . ' - Rp ' . $option['harga']?>
                </option>
                <?php } ?>
        </select><br>

        <label for="kuantitas">Qty</label>
        <input type="text" name="kuantitas" id="kuantitas" value="<?=$row['kuantitas']?>"></input><br>
        <input type="submit" value="Ubah">
        <?php endwhile; ?>
    
    </form>
    </body>