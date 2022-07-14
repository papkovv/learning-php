<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Изменить</title>
</head>
<body>
<h1>Изменить запись</h1>
<?php
$dsn = 'mysql:host=localhost;dbname=library';
$pdo = new PDO($dsn, 'root', 'root');
$id = $_GET['id'];

$sql = $pdo->query('SELECT * FROM `books` WHERE `id` = '.$id);
$row = $sql->fetch(PDO::FETCH_OBJ);

echo 'Название книги: '.$row->title.'<br>';
echo 'Автор: '.$row->author.'<br>';
echo 'Количество страниц: '.$row->page.'<hr>';

echo "<form action='change_handler.php?id=$id' method='POST'>"?>
    Название: <input type="text" name="titl"><br>
    Автор: <input type="text" name="auth"><br>
    Количество страниц: <input type="text" name="page"><br>
    <input type="submit" value="Изменить"><hr>
</form>

</body>
</html>