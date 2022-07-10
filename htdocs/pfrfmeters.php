<?php
function drink (string $tmp = 'горячий', string $flavor = 'чай')
{
    echo "Пейте $tmp $flavor.<br>";
}

drink();
drink('холодный');
drink('охлажденный', 'лимонад');

function add (int ...$numbers)
{
    $total = 0;
    foreach ($numbers as $num)
    {
        $total += $num;
    }
    echo "<hr>Итого: $total";
}

add(1, 2, 3);
?>