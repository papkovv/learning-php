<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
for ($i = 1; $i < 4; $i++)
{
    for ($j = 1; $j < 4; $j++)
    {
        if ($i == 1 && $j == 1)
        {
            echo "Продолжить внутренний цикл, если i = $i и j = $j <br>";
            continue;
        }

        if ($i == 2 && $j == 1)
        {
            echo "Прервать внутренний цикл, если i = $i и j = $j <br>";
            break;
        }

        echo "Выполнено i = $i и j = $j <br>";
    }
}
?>
</body>
</html>