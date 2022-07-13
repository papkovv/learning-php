<?php session_start();?>

<?php
function reject ($entry)
{
    echo "Недопустимо: $entry <br>";
    echo 'Пожалуйста, <a href="session_form.html">авторизуйтесь</a>';
    exit();
}

if (isset($_POST['user']))
{
    $user = trim($_POST['user']);
    if (!ctype_alpha($user))
    {
        reject('Имя пользователя');
    }
    if (isset($_POST['pass']))
    {
        $pass = trim($_POST['pass']);
        if (!preg_match('/^[A-Za-z0-9._]{8,}$/', $pass))
        {
            reject('Пароль');
        }
        else
        {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header('Location: session_get.php');
        }
    }
}
else
{
    header('Location: session_form.html');
}
