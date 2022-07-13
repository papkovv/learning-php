<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<form action="action_handler.php" method="POST">
    <dl>
        <dt> Имя:
            <dd><input type="text" name="name">
        <dt>Адрес email:
            <dd><input type="text" name="mail">
        <dt>Примечание:
            <dd><textarea rows="5" cols="20" name="comment"></textarea>
    </dl>
    <p><input type="submit"></p>
</form>
</body>
</html>