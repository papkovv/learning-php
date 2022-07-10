<?php
function supply () : array
{
    return array(75, 3.14, 'Супер РНР', True);
}
$array = supply();

foreach ($array as $data)
{
    echo "Значение элемента: $data<br>";
}
?>