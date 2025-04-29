<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stock = htmlspecialchars($_POST['stock']);
    $merek = htmlspecialchars($_POST['merek']);

    mysqli_query($conn, "INSERT INTO produk_122 (nama, harga,stock,merek) VALUES ('$nama', '$harga', '$stock','$merek')");
    header('Location: product.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'layout/header.html' ?>
<br>
<a href="product.php" class="btn">Kembali</a>

<h1>Tambah Produk</h1>
<form action="" method="post">
        <label>Nama Produk:</label>
        <input type="text" name="nama" required>
        <label>Harga:</label>
        <input type="number" name="harga" required>
        <label>Stok:</label>
        <input type="number" name="stock" required>
        <label>Merek:</label>
        <input type="text" name="merek" required>
        <br><br>
        <button type="submit" name="submit" class="btn">Simpan</button>
    </form>
</body>
</html>
