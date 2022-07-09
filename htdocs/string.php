<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$phrase = 'Правда редко бывает чистой';
$author = 'Оскар Уайльд';
echo $phrase;
echo "<p>Часто говорят, что <q>$phrase</q> </p>";
$phrase = $phrase. ' и никогда не бывает простой';
echo "<p><q>$phrase</q> <cite>$author</cite></p>";
?>
</body>
</html>