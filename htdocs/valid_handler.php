<?php

if (!empty($_POST['quantity']))
{
    $quantity = $_POST['quantity'];
    if (!is_numeric($quantity))
    {
        $quantity = NULL;
        echo 'Количество нужно указать в виде числа<br>';
    }
}
else
{
    $quantity = NULL;
    echo 'Необходимо указать количество<br>';
}

if (!empty($_POST['email']))
{
    $email = $_POST['email'];
    $pattern = '/\b[\w. -]+@[\w. -]+\.[A-Za-z]{2,6}\b/';
    if (!preg_match($pattern, $email))
    {
        $email = NULL;
        echo 'Адрес электронной почты указан в недопустимом формате';
    }
}
else
{
    $email = NULL;
    echo 'Необходимо указать адрес электронной почты';
}

if (($quantity != NULL) && ($email != NULL))
{
    echo "Адрес email: $email<br>Количество: $quantity ";
}