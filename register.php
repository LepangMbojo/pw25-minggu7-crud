<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username_ID = htmlspecialchars($_POST['username']);
    $Name = htmlspecialchars($_POST['name']);
    $Password = htmlspecialchars($_POST['password']);

    // Cek apakah username sudah ada
    $check = mysqli_query($conn, "SELECT * FROM login_122 WHERE Username_ID = '$Username_ID'");

    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Username sudah terdaftar!'); window.location.href = 'register.php';</script>";
    } else {
        // Insert user baru ke database
        $insert = mysqli_query($conn, "INSERT INTO login_122 (Username_ID, Name, Password) VALUES ('$Username_ID', '$Name', '$Password')");

        if ($insert) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href = 'product.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal!'); window.location.href = 'register.php';</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<div class="login-container">
    <form action="register.php" method="post" class="login-form">
        <h2>Register</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="name">Nama Lengkap:</label>
        <input type="text" name="name" id="name" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
