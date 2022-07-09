<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$number = 2;
$letter = 'Б';

switch ($number)
{
    case 1:
        echo 'Единица<br>';
        break;
    case 2:
        echo 'Двойка<br>';
        break;
    case 3:
        echo 'Тройка<br>';
        break;
    default:
        echo 'Неизвестное число<br>';
}

switch ($letter)
{
    case 'А':
        echo 'Буква "А"<br>';
        break;
    case 'Б':
        echo 'Буква "Б"<br>';
        break;
    case 'В':
        echo 'Буква "В"<br>';
        break;
    default:
        echo 'Неизвестная буква<br>';
}

switch ($number)
{
    case 0:
    case 1:
    case 2:
        echo 'Меньше, чем 3<br>';
        break;
    default:
        echo '3 или больше, либо меньше нуля';
}
?>
</body>
</html>