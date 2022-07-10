<?php
$hello = function ($user)
{
    echo "Привет, $user!<br>";
};
$hello('Влад');

function greet (callable $anon)
{
    $anon('Катя');
}
greet($hello);

function meet() : callable
{
    $time = 'утро';
    return function ($name) use (&$time)
    {
      return "Доброе $time, $name!";
    };
}

$meeting = meet();
echo $meeting('Вика');
?>