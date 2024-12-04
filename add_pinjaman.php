<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_anggota = $_POST['id_anggota'];
    $id_buku = $_POST['id_buku'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];

    $sql = "INSERT INTO Pinjaman (ID_Anggota, ID_Buku, Tanggal_Pinjam) VALUES ('$id_anggota', '$id_buku', '$tanggal_pinjam')";

    if ($conn->query($sql) === TRUE) {
        echo "Pinjaman berhasil ditambahkan.";
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
    <title>Tambah Pinjaman</title>
</head>
<body>
    <h1>Tambah Pinjaman</h1>
    <form method="POST" action="">
        <label for="id_anggota">ID Anggota:</label><br>
        <input type="number" id="id_anggota" name="id_anggota" required><br><br>

        <label for="id_buku">ID Buku:</label><br>
        <input type="number" id="id_buku" name="id_buku" required><br><br>

        <label for="tanggal_pinjam">Tanggal Pinjam:</label><br>
        <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required><br><br>
        
        <input type="submit" value="Tambah Pinjaman">
    </form>
</body>
</html>
