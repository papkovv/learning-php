<?php
if (isset($_GET['id']))
{
    $id = $_GET['id'];

    switch ($id)
    {
        case 1:
            echo 'Выбрана корова<hr>';
            break;
        case 2:
            echo 'Выбрана лошадь<hr>';
            break;
        case 3:
            echo 'Выбрана коза<hr>';
            break;
    }
}

echo '<h1>Выберите животное</h1>';
echo ' <p><a href="link.php?id=1">Корова</a> |';
echo ' <a href="link.php?id=2">Лошадь</a> |';
echo ' <a href="link.php?id=3">Коза</a></p>';