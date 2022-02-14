<?php
$dbhost = "localhost";
$dbname = "groomroom";
$dbuser = "root";
$dbpassword = "";

//Подключение к базе данных
$link = new mysqli($dbhost, $dbuser, $dbpassword,$dbname);
if($link->connect_errno)
{
    echo "Ошибка подключения к БД: $linr->connect_error";
}
?>