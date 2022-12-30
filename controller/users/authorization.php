<?php
include "../../connect/connect.php";
include "../../model/users/authorization.php";

$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);

// echo $login . "<br>";
// echo $password . "<br>";

$user = new UserAuth($pdo);
$result = $user->authorization($login, $password);
$authuser = $result->fetch(PDO::FETCH_ASSOC);

// $result = $authuser->fetch_assoc();
// echo "!!!result: " . $authuser;
// echo "<pre>";
// print_r($authuser);
// echo "<pre>";

// while ($row = $authuser->fetch(PDO::FETCH_ASSOC)) {
//     echo $row["login"];
// }

// echo "!!!result: " . $authuser->fetch_assoc();
if ($authuser['login']) {
    setcookie('user', $authuser['login'], time() + 3600 * 24, "/");
    header('Location: /');
} else {
    include "../../view/users/userNotFound.html";
}


// $connect->close();
