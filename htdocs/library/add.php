<?php

$dsn = 'mysql:host=localhost;dbname=library';
$pdo = new PDO($dsn, 'root', 'root');

if (!empty($_POST['titl']))
{
    $titl = trim($_POST['titl']);
    if (!empty($_POST['auth']))
    {
        $auth = trim($_POST['auth']);
        if (!empty($_POST['page']))
        {
            if (is_numeric($_POST['page']))
            {
                $page = trim($_POST['page']);
                $sql = 'INSERT INTO books(title, author, page) VALUES(:title, :author, :page)';
                $query = $pdo->prepare($sql);
                $query->execute(['title' => $titl, 'author' => $auth, 'page' => $page]);
                header('Location: library.php');
            }
            else
            {
                echo 'Количество страниц должно быть числом';
                exit();
            }
        }
        else
        {
            echo 'Введите количество страниц';
            exit();
        }
    }
    else
    {
        echo 'Введите автора книги';
        exit();
    }
}
else
{
    echo 'Введите название книги';
    exit();
}

?>