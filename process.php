<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "contact_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Mesajınız başarıyla gönderildi!";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
