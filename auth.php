<?php
// More info about CppComet http://comet-server.org/doku.php/en
// More info about CometQL http://comet-server.org/doku.php/en:comet:cometql
// More info about auth in CppComet http://comet-server.org/doku.php/en:comet:authentication

header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");
// We connect to the comet server with login and password for the access demo (you can get your data for connection after registration at comet-server.com)
// Login 15
// Password lPXBFPqNg3f661JcegBY0N0dPXqUBdHXqj2cHf04PZgLHxT6z55e20ozojvMRvB8
// CometQL_v1 database
$link = mysqli_connect("app.comet-server.ru", "15", "lPXBFPqNg3f661JcegBY0N0dPXqUBdHXqj2cHf04PZgLHxT6z55e20ozojvMRvB8", "CometQL_v1");


$user_id = $_GET['user_id'];
$user_key = $_GET['user_key'];
 
mysqli_query (  $link, "INSERT INTO users_auth (id, hash)VALUES('".mysqli_real_escape_string($link, $user_id)."', '".mysqli_real_escape_string($link, $user_key)."' );" );

if(mysqli_errno($link))
{
    echo mysqli_errno($link).": ".mysqli_error($link);
}
else
{
    echo "ok"; 
}