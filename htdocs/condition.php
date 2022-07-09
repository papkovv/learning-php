<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$a = NULL;
$b = 8;
$c = 'PHP - это весело!';

$verb = ($b == 1)? 'угадали': 'не угадали';
echo "Вы $verb! Вы назвали число $b. <hr>";

$parity = ($b % 2 != 0)? 'нечетное': 'четное';
echo "$b - $parity число<hr>";

$result = $a?? $b?? $c;
echo "abc: $result <br>";

$result = $c?? $b?? $a;
echo "cba: $result <br>";
?>
</body>
</html>