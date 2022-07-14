<?php
$dsn = 'mysql:host=localhost;dbname=library';
$pdo = new PDO($dsn, 'root', 'root');

$id = $_GET['id'];
$titl = trim($_POST['titl']);
$auth = trim($_POST['auth']);
$page = trim($_POST['page']);
$sql = 'UPDATE books SET title = :title, author = :author, page = :page WHERE id = :id';
$query = $pdo->prepare($sql);
$query->execute(['title' => $titl, 'author' => $auth, 'page' => $page, 'id' => $id]);

header('Location: library.php');
?>