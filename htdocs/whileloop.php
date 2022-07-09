<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$numbers = array(10, 20, 30);

echo '<dt>Цикл while: ';
$i = 0;
while ($i < 3)
{
    echo "<dd>Элемент $i = $numbers[$i] ";
    $i++;
}

echo '<dt>Цикл do while: ';
$i = 0;
do
{
    echo "<dd>Элемент $i = $numbers[$i] ";
    $i++;
}
while ($i < 3);
?>
</body>
</html>