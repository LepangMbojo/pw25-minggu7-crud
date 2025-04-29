<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM produk_122")
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'layout/header.html' ?>

<main>
    <h1>Data Produk</h1>
    <a href="create.php" class="btn">Tambah Produk</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Merek</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= htmlspecialchars($row['nama']); ?></td>
            <td>Rp<?= number_format($row['harga'], 0, ',', '.'); ?></td>
            <td><?= htmlspecialchars($row['stock']); ?></td>
            <td><?= htmlspecialchars($row['merek']); ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>" class="edit-btn">Edit</a>
                <a href="delete.php?id=<?= $row['id']; ?>" class="delete-btn" onclick="return confirm('Yakin ingin hapus?');">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</main>
</body>
</html>
