<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$days = array('Понедельник', 'Вторник', 'Среда');
foreach ($days as $value)
{
    echo "&bull; $value ";
}

$month = array ('янв' => 'Январь', 'фев' => 'Февраль', 'мар' => 'Март');
echo '<dl>';
foreach ($month as $key => $value)
{
    echo "<dt>$key<dd>$value";
}
echo '</dl>';
?>
</body>
</html>