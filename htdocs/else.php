<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php

if (4 > 2)
{
    echo '<p>Да, 4 больше, чем 2 <br>';
}

if((4 > 2) && (8 > 4))
{
    echo '4 больше, чем 2, а 8 больше, чем 4<br>';
}

if (4 > 8)
{
    echo '4 больше, чем 8 <br>';
}
else
{
    echo '4 меньше, чем 8 <br>';
}

if (4 > 8)
{
    echo 'Это выражение истинно</p>';
}
elseif (8 > 4)
{
    echo 'Дополнительное выражение истинно</p>';
}
else
{
    echo 'Оба выражения ложны</p>';
}
?>
</body>
</html>