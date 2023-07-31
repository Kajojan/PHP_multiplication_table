<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello</p>
    <?php
$conn = new mysqli("127.0.0.1", "root", "root", "my_database");
if ($conn->connect_error) {
    die("Nieudane połączenie: " . $conn->connect_error);
} else {
    echo "Połączenie z bazą danych powiodło się!";
}
$conn->close();
?>

</body>
</html>