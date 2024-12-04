<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "INSERT INTO Buku (Judul_Buku, Penulis, Tahun_Terbit) VALUES ('$judul', '$penulis', '$tahun_terbit')";

    if ($conn->query($sql) === TRUE) {
        echo "Buku berhasil ditambahkan.";
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
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form method="POST" action="">
        <label for="judul">Judul Buku:</label><br>
        <input type="text" id="judul" name="judul" required><br><br>
        
        <label for="penulis">Penulis:</label><br>
        <input type="text" id="penulis" name="penulis" required><br><br>

        <label for="tahun_terbit">Tahun Terbit:</label><br>
        <input type="number" id="tahun_terbit" name="tahun_terbit" required><br><br>
        
        <input type="submit" value="Tambah Buku">
    </form>
</body>
</html>
