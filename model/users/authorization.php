<?php
$login = $_POST['login'];
$password = $_POST['password'];

$password = md5($password);

$connect = new mysqli('localhost', 'root', '', 'news-php');

$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
$result = $connect->query($sql);

$authuser = $result->fetch_assoc();
// echo "!!!!!!" . $authuser;

if (isset($authuser)) {
    include "../../view/userNotFound.html";
}

setcookie('user', $authuser['login'], time() + 3600 * 24, "/");

$connect->close();

header('Location: /');
