<?php

$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "mydatabase"; 


$conn = new mysqli($host, $kullanici, $sifre, $veritabani);


if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$mesaj = $_POST['message'];


$sql = "INSERT INTO users (isim, email, mesaj) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $mesaj);

if ($stmt->execute()) {
    echo "Mesajınız başarıyla gönderildi!";
} else {
    echo "Hata: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
