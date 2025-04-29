<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM login_122");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'layout/header.html'; ?>

<main>
    <h1>Data User</h1>
    <a href="register.php" class="btn">Tambah User</a>
    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= htmlspecialchars($row['Username_ID']); ?></td>
            <td><?= htmlspecialchars($row['Name']); ?></td>
            <td><?= htmlspecialchars($row['Password']); ?></td>
            <td>
                <a href="edit_user.php?id=<?= $row['Username_ID']; ?>" class="edit-btn">Edit</a>
                <a href="delete_user.php?id=<?= $row['Username_ID']; ?>" class="delete-btn" onclick="return confirm('Yakin ingin hapus user ini?');">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</main>

</body>
</html>

