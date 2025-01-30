<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iletisim";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}

$sql = "SELECT * FROM form_bilgileri ORDER BY tarih DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Gönderilen Mesajlar</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Ad Soyad</th><th>E-posta</th><th>Mesaj</th><th>Tarih</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['ad_soyad']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['mesaj']) . "</td>";
        echo "<td>" . $row['tarih'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Hiç mesaj bulunamadı.";
}

$conn->close();
?>
