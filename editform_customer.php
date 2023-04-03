<?php
require "koneksi.php";

$id_customer = $_GET["id_customer"];
$sql = "SELECT * FROM customer WHERE id_customer = '$id_customer'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)):
?>

<!DOCTYPE html>
<head></head>
<body>
    <h2> Edit Data Customer </2>
    <form action="edit_customer.php" method="POST">
        <input type="hidden" id="" name="id_customer" value="<?=$row['id_customer']?>" /><br>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="<?=$row['nama']?>" /><br>
        <label for="no_hp">No_HP</label>
        <input type="number" id="no_hp" name="no_hp" value="<?=$row['no_hp']?>" /><br>
        <label for="email">email</label>
        <input type="text" id="email" name="email" value="<?=$row['email']?>" /><br>
        <input type="Submit" value="edit">
    </form>
    <?php endwhile ?>
</body>
</html>    