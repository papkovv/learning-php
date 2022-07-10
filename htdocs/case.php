<?php
$str = 'C++ Programming in easy steps';
echo "Исходная строка: $str<hr>";

$ver = strtolower($str);
echo "Строчные буквы: $ver<br>";

$ver = strtoupper($str);
echo "Прописные буквы: $ver<hr>";

$ver = ucfirst(strtolower($str));
echo "Прописная буква первого слова: '$ver'<br>";
echo "Прописная буква каждого слова: ".ucwords($ver);