<?php
$servername = "localhost";
$username = "bitrix1";
$password = "249349";
$dbname = "bitrix_db";

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем подключение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
} else {
    echo "Успешное подключение к базе данных!";
}

// Закрываем подключение
$conn->close();
?>
