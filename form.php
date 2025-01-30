<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu</title>
</head>
<body>
    <h2>İletişim Formu</h2>
    <form action="process.php" method="POST">
        <label for="name">Adınız:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">E-posta:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Mesajınız:</label>
        <textarea id="message" name="message" required></textarea><br><br>

        <input type="submit" value="Gönder">
    </form>
</body>
</html>
