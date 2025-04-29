<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM produk_122 WHERE id=$id");

header('Location: product.php');
?>
