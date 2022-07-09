<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
define('USER', 'Владислав');
define('PETS', ['котенок', 'щенок', 'хомячок']);
echo '<p>Привет, '. USER. '. Как поживает твой '. PETS[1]. '?</p>';
echo '<p>Ты используешь РНР-движок версии '. PHP_VERSION;
echo ', запущенный в '. PHP_OS. '</p>';
?>
</body>
</html>