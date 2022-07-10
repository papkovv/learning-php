<?php
$str1 = 'PHP для начинающих';
$str2 = 'PHP для начинающих';
$str3 = 'PHP Для Начинающих';
$str4 = 'php для начинающих';

echo "'$str1' в сравнении с '$str2': ". strcmp($str1, $str2). '<br>';
echo "'$str1' в сравнении с '$str3': ". strcmp($str1, $str3). '<br>';
echo "'$str1' в сравнении с '$str4': ". strcmp($str1, $str4). '<hr>';

echo 'Сравнение без учета регистра:<br>';
echo "'$str1' в сравнении с '$str4': ".strcasecmp($str1, $str4);

$total = 0;
for ($i = 0; $i < strlen($str1); $i++)
{
    $total += ord($str1[$i]);
}
echo "<hr>Объем ASCII-кода '$str1': $total";
?>