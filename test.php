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
    <title>Ответы на вопросы</title>
</head>
<body>
<?php
if (isGet()) {
    $id = $_GET['id'];
    $json = file_get_contents("json/$id.json");
    $data = json_decode($json, true);
    echo $data['question'];
    ?>
    <form method="post">
        <label name="user_answer"> Ответ</label>
        <input type="text" name="user_answer" placeholder="Ваш ответ"><br/>
        <button> Ответить</button>
    </form>
    <?php

    if (isPost()) {
        $answer = $data['answer'];
        $u_answer = $_POST['user_answer'];
        if ($u_answer == $answer) {
            echo "Верно";
        }else{
            echo "Не верно";
        }
    }
}else{?>
    <form method="get">
        <label name="id"> ID </label>
        <input type="text" name="id" placeholder="ID вопроса"><br/>
        <button>Выбрать вопрос</button>
    </form>
<?php
}
?>

</body>
</html>