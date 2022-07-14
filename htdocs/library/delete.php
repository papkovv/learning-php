<?php
$dsn = 'mysql:host=localhost;dbname=library';
$pdo = new PDO($dsn, 'root', 'root');

$id = $_GET['id'];
$sql = 'DELETE FROM `books` WHERE `id` = :id';
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);

header('Location: library.php');
?>