<?php
    require_once "function.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адимнка</title>
</head>
<body>
<form method="post" action="test.php">
    <label name="question">Вопрос</label>
    <input type="text" name="question" placeholder="Введите вопрос"><br/>
    <label name="answer">Ответ</label>
    <input type="text" name="answer" placeholder="Верный ответ"><br/>
    <button onclick="createFiles()">Создать json файл</button>
</form>
<a href="test.php">В тестовую</a>
</body>
</html>