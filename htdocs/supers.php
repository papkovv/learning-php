<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
echo 'Веб-сервер: '. $_SERVER['SERVER_SOFTWARE']. '<br>';
echo 'Сценарий: '. $_SERVER['PHP_SELF']. '<br>';
echo 'Имя хоста: '. $_SERVER['HTTP_HOST']. '<br>';
echo 'Метод запроса: '. $_SERVER['REQUEST_METHOD'];

foreach ($_GET as $key => $value)
{
    echo '<hr>HTTP GET: '. $key. '='. $value;
}
?>
</body>
</html>