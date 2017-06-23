<?php
 
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");
// Подключаемся к комет серверу с логином и паролем для демо доступа (получить свои данные для подключения можно после регистрации на comet-server.com )
// Логин 15
// Пароль lPXBFPqNg3f661JcegBY0N0dPXqUBdHXqj2cHf04PZgLHxT6z55e20ozojvMRvB8
// База данных CometQL_v1
$link = mysqli_connect("app.comet-server.ru", "15", "lPXBFPqNg3f661JcegBY0N0dPXqUBdHXqj2cHf04PZgLHxT6z55e20ozojvMRvB8", "CometQL_v1");


$user_id = $_GET['user_id'];
$user_key = $_GET['user_key'];

// Отправляем сообщение в канал
mysqli_query (  $link, "INSERT INTO users_auth (id, hash)VALUES('".mysqli_real_escape_string($link, $user_id)."', '".mysqli_real_escape_string($link, $user_key)."' );" );

if(mysqli_errno($link))
{
    echo mysqli_errno($link).": ".mysqli_error($link);
}
else
{
    echo "ok"; 
}