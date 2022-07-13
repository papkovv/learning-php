<?php
function reject ($entry)
{
    echo "Недопустимо: $entry <br>";
    echo 'Пожалуйста, <a href="cookie_form.html">авторизуйтесь</a>';
    exit();
}

if (isset($_POST['user']))
{
    $user = trim($_POST['user']);
    if (!ctype_alnum($user))
    {
        reject('Имя пользователя');
    }

    if (isset($_POST['pass']))
    {
        $pass = trim($_POST['pass']);
        if (!ctype_alnum($pass))
        {
            reject('Пароль');
        }
        else
        {
            setcookie('user', $user, time()+3600);
            setcookie('pass', $pass, time()+3600);
            header('Location: cookie_get.php');
        }
    }
}
else
{
    header('Location: cookie_form.html');
}