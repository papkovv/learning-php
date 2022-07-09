<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$cars = array('УАЗ' => 'Патриот', 'ГАЗ' => 'Сайбер', 'ВАЗ' => 'Нива');
echo '<dl><dt>Исходный порядок элементов:<dd>';
foreach ($cars as $key => $value)
{
    echo ' &bull; ', $key. ' '. $value;
}

asort($cars);
echo '<dt>Сортировка по значению:<dd>';
foreach ($cars as $key => $value)
{
    echo ' &bull; ', $key. ' '. $value;
}

ksort($cars);
echo '<dt>Сортировка по ключу:<dd>';
foreach ($cars as $key => $value)
{
    echo ' &bull; ', $key. ' '. $value;
}
echo '</dl>';
?>
</body>
</html>