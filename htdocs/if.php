<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$num = 8;
if ($num > 5)
{
    echo "$num больше 5<br>";
}
if ($num <= 5)
{
    echo "$num не более 5<br>";
}
if ($num % 2 == 0)
{
    echo "$num четное<br>";
}
if ($num % 2 != 0)
{
    echo "$num нечетное<br>";
}
?>
</body>
</html>