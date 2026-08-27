<?php
// БАГ 3: Подключение к БД через localhost вместо имени сервиса
$host = 'localhost'; 
$user = 'root';
$pass = 'secret';
$db = 'test_db';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Success! Connected to DB.";
} catch (PDOException $e) {
    echo "DB Error: " . $e->getMessage();
}
?>