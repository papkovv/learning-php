<?php
$a = $b = 5;


function modify (int $val, int &$ref)
{
    echo "Переданные значения: $val, $ref<br>";
    $val++;
    $ref++;
    echo "Инкрементированные значения: $val, $ref<hr>";
}

modify($a, $b);

echo "Сохраненные значения: $a, $b";
?>