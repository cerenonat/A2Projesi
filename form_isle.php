<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iletisim";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad_soyad = $_POST['ad_soyad'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];

    $sql = "INSERT INTO form_bilgileri (ad_soyad, email, mesaj) VALUES ('$ad_soyad', '$email', '$mesaj')";

    if ($conn->query($sql) === TRUE) {
        echo "Mesajınız başarıyla gönderildi!";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
