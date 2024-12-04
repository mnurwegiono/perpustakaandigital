<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_daftar = $_POST['tanggal_daftar'];

    $sql = "INSERT INTO Anggota (Nama, Alamat, Tanggal_Daftar) VALUES ('$nama', '$alamat', '$tanggal_daftar')";

    if ($conn->query($sql) === TRUE) {
        echo "Anggota berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
</head>
<body>
    <h1>Tambah Anggota</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br><br>

        <label for="tanggal_daftar">Tanggal Daftar:</label><br>
        <input type="date" id="tanggal_daftar" name="tanggal_daftar" required><br><br>
        
        <input type="submit" value="Tambah Anggota">
    </form>
</body>
</html>
