<?php
    function isPost()
    {
        if (!empty($_POST)) {
            return true;
        }
    }

    function isGet()
    {
        if (!empty($_GET)) {
            return true;
        }
    }

    function getNameFiles()
    {
        $path = 'json';
        $dir = opendir("$path");
        $i = 1;
        while (false !== ($file = readdir($dir))) {
            if (strpos($file, '.json', 1)) {
                $i++;
            }
        }
        return $i;
    }

    function getResult($i)
    {
        if (file_exists("json/$i.json")) {
            $json = file_get_contents("json/$i.json");
            $profiles = json_decode($json, true);
            echo "Вопрос : " . $profiles['question'] . "<br/>";
            echo "Ответ : " . $profiles['answer'] . "<br/>";
        }else{
            echo "Вопроса с таким айди не существует<br/>";
        }
    }