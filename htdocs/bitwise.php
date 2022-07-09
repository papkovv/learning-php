<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$x = 5;
$y = 10;
echo "X: $x, Y: $y <br>";

$x = $x ^ $y; /* 1010 ^ 0101 = 1111 (десятичное 15)*/
$y = $x ^ $y; /* 1111 ^ 0101 = 1010 (десятичное 10)*/
$x = $x ^ $y; /* 1111 ^ 1010 = 0101 (десятичное 5)*/
echo "X: $x, Y: $y <br>";
?>
</body>
</html>