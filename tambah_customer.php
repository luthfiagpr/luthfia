<?php

require "koneksi.php";
$id_customer = $_POST["id_customer"];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

$sql = "INSERT INTO customer VALUES ('','$nama', '$no_hp', '$email')";
mysqli_query ($conn, $sql);
header ("location : databuku.php");     

?>