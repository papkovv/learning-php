<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php
$yes = TRUE;
$no = FALSE;

$result = ($no && $no)? 'TRUE': 'FALSE';
echo "no И no вернет $result <br>";

$result = ($yes && $no)? 'TRUE': 'FALSE';
echo "yes И no вернет $result <br>";

$result = ($yes && $yes)? 'TRUE': 'FALSE';
echo "yes И yes вернет $result <br>";

$result = ($no || $no)? 'TRUE': 'FALSE';
echo "no ИЛИ no вернет $result <br>";

$result = ($yes || $no)? 'TRUE': 'FALSE';
echo "yes ИЛИ no вернет $result <br>";

$result = ($yes || $yes)? 'TRUE': 'FALSE';
echo "yes ИЛИ yes вернет $result <br>";

$result = (! $yes)? 'TRUE': 'FALSE';
echo "НЕ yes вернет $result <br>";
?>
</body>
</html>