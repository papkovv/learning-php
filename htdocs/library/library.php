<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Библиотека</title>
</head>
<body>
<h1>Библиотека</h1>
<form action="add.php" method="POST">
    Название: <input type="text" name="titl"><br>
    Автор: <input type="text" name="auth"><br>
    Количество страниц: <input type="text" name="page"><br>
    <input type="submit" value="Добавить"><hr>
</form>
<?php
$dsn = 'mysql:host=localhost;dbname=library';
$pdo = new PDO($dsn, 'root', 'root');

$query = $pdo->query('SELECT * FROM `books` ORDER BY `id` DESC');
while ($row = $query->fetch(PDO::FETCH_OBJ))
{
    echo 'Название книги: '.$row->title.'<br>';
    echo 'Автор: '.$row->author.'<br>';
    echo 'Количество страниц: '.$row->page.'<br>';
    echo '<a href="change.php?id='.$row->id.'"><button>Изменить</button></a>  ';
    echo '<a href="delete.php?id='.$row->id.'"><button>Удалить</button></a><hr>';
}
?>
</body>
</html>