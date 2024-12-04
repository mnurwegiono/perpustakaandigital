<?php
include('db.php');

$sql = "SELECT * FROM Buku";
$result = $conn->query($sql);

echo "<h1>Data Buku</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Judul Buku</th><th>Penulis</th><th>Tahun Terbit</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['ID_Buku'] . "</td><td>" . $row['Judul_Buku'] . "</td><td>" . $row['Penulis'] . "</td><td>" . $row['Tahun_Terbit'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
