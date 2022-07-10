<?php
function greet()
{
    echo 'Привет, пользователь!<br>';
}

greet();

function outer()
{
    function inner()
    {
        echo 'Вложенная функция вызвана.<br>';
    }
    echo 'Вложенная функция создана.<br>';
}

outer();
inner();
?>
