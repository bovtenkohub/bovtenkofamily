<?php
// Ваши параметры подключения к базе данных
$host = 'ec2-52-215-68-14.eu-west-1.compute.amazonaws.com';
$db = 'dbce0gaajo02rr';
$user = 'kgbqtbwigcivdu';
$port = '5432';
$pass = '137b1d5771bcbab90f163f6e8db96b6ed953ce910aa50ea707dd0643a8243c5f';
$dsn = "pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pass";

// Создание нового объекта PDO
$pdo = new PDO($dsn);

// Получение заметки из формы
$note = $_POST['note'];

// Вставка заметки в таблицу
$sql = 'INSERT INTO notes (text) VALUES (:note)';
$stmt= $pdo->prepare($sql);
$stmt->bindValue(':note', $note);
$stmt->execute();
?>
