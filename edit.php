<?php
include 'koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM produk_122 WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stock = htmlspecialchars($_POST['stock']);
    $merek = htmlspecialchars($_POST['merek']);

    mysqli_query($conn, "UPDATE produk_122 SET nama='$nama', harga='$harga', stock='$stock',stock='$merek' WHERE id=$id");
    header('Location: product.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'layout/header.html' ?>

    <h1>Edit Produk</h1>
    <form action="" method="post">
        <label>Nama Produk:</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($row['nama']); ?>" required>
        <label>Harga:</label>
        <input type="number" name="harga" value="<?= htmlspecialchars($row['harga']); ?>" required>
        <label>Stok:</label>
        <input type="number" name="stock" value="<?= htmlspecialchars($row['stock']); ?>" required>
        <label>Merek:</label>
        <input type="text" name="merek" value="<?= htmlspecialchars($row['merek']); ?>" required>
        <button type="submit" name="submit" class="btn">Update</button>
    </form>
</body>
</html>
