<?php

$name = $_POST['name'];
$grupa = $_POST['grupa'];
$people= $_POST['people'];
$language = $_POST['lang'];
$courses = $_POST['courses'];

if (isset($_POST['bath'])){
    if (!empty( $name )){
        echo 'Ваше имя: '.$name.'<br>';
        if (!empty( $grupa )){
            echo 'Ваша группа: '.$grupa.'<br>';
            if( isset( $people ))
            {
                echo "Пол: ";
                switch( $people )
                {
                    case 'man':
                        echo 'Мужчина'.'<br>';
                        break;
                    case 'woman':
                        echo 'Женщина'.'<br>';
                        break;
                }
                if (empty($language)){
                    echo 'Вы не выбрали ни одного языка'.'<br>';
                }
                else
                {
                    $N = count($language);

                    echo ('Вы знаете '.$N.' язык(а): '.'<br>');
                    for ($i = 0; $i < $N; $i++){
                        echo ($language[$i].' '.'<br>');
                    }
                }

                if (empty($courses)){
                    echo 'Вы не выбрали ни один курс'.'<br>';
                }
                else
                {
                    $N = count($courses);

                    echo ('Вы выбрали '.$N.' язык(а): '.'<br>');
                    for ($i = 0; $i < $N; $i++){
                        echo ($courses[$i].' '.'<br>');
                    }
                }
            }
        }
    }
}