<?php
require "koneksi.php";

$sql = "SELECT transaksi.id_transaksi, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran, customer.id_customer, customer.nama, buku.id_buku, buku.judul FROM customer INNER JOIN transaksi on customer.id_customer = transaksi.id_customer INNER JOIN buku on buku.id_buku = transaksi.id_buku ORDER by id_transaksi";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE hmtl>
<head>
</head>

<body>
    <h2>Data Transaksi Toko FIA</h2>
    <a href="insertform_transaksi.php?">Tambah Data Transaksi</a>
    <table border=3px solid yellow>
        <tr>
            <th class="aksi">Id Transaksi</th>
            <th>Nama Pelanggan</th>
            <th>Nama Buku</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th class="aksi">Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)): $total_pembayaran = $row['kuantitas']*$row['harga']?>
        <tr>
            <td><?=$row['id_transaksi']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['judul']?></td>
            <td><?=$row['kuantitas']?></td>
            <td><?=$row['harga']?></td>
            <td ><?=$total_pembayaran ?></td>
            <td class="center_align">
                <a href="editform_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>" class="button1">Edit</a>
                <a href="delete_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>" class="button2">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>