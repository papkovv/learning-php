<?php
$number = 1;
echo "Глобальное число: $number<br>";

function show_local ()
{
    $number = 100;
    echo "Локальное число: $number<br>";
}
show_local();

function recur ()
{
    global $number;
    static $letter = 'A';
    if ($number < 14)
    {
        echo "$number:$letter | ";
        $number++;
        $letter++;
        recur();
    }
}
recur();
echo "<hr>Глобальное число: $number";
?>