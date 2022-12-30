<?php
include "../../connect/connect.php";
include "../../model/users/registration.php";

$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);

$user = new UserReg($pdo);
$result = $user->registration($email, $login, $password);

header('Location: /');

// echo "!!!" . $result;
// echo "<pre>";
// print_r($result);

// echo "<pre>";


// $connect = new mysqli('localhost', 'root', '', 'news-php');
// $connect->query("INSERT INTO `users` (`email`, `login`, `password`)
// VALUES('$email','$login','$password')");

// $connect->close();
