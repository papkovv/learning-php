<?php

if (isset($_POST['definition']))
{
    $definition = $_POST['definition'];
}
else
{
    $definition = NULL;
}

if ($definition != NULL)
{
    if ($definition != 'Объектно ориентированный')
    {
        echo "$definition - неправильно!";
    }
    else
    {
        echo "$definition - правильно!";
    }
}
else
{
    echo 'Вы должны выбрать один из вариантов ответа!';
}

?>