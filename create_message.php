<?php
// Veritabanı bağlantısı
$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "mydatabase"; // Veritabanının adı

// Bağlantı oluşturuluyor
$conn = new mysqli($host, $kullanici, $sifre, $veritabani);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Formdan gelen verileri al
$name = $_POST['name'];
$email = $_POST['email'];
$mesaj = $_POST['message'];

// SQL sorgusu ile verileri veritabanına kaydet
$sql = "INSERT INTO users (isim, email, mesaj) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $mesaj);

if ($stmt->execute()) {
    echo "Mesajınız başarıyla gönderildi!";
} else {
    echo "Hata: " . $stmt->error;
}

// Bağlantıyı kapat
$stmt->close();
$conn->close();
?>