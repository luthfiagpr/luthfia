<?php
require 'koneksi.php';
$sql = "SELECT * FROM buku";
$result = mysqli_query($conn, $sql);
?>

<!Doctype html>
<head></head>
<body>
    <a href="form_buku.html">Tambah</a>
    <table border=3px solid yellow>
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Harga</th>
            <th>Penulis</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $row['id_buku'] ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['penerbit'] ?></td>
            <td><?= $row['tahun'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['penulis'] ?></td>
            <td>
                <a href="editform_buku.php?id_buku=<?= $row['id_buku']?>">Edit</a>
                <a href="delete_buku.php?id_buku=<?= $row['id_buku']?>" ?>Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>