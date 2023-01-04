<?php
$user = new UserAuth();
$user->authorization();

class UserAuth
{
    public function authorization()
    {
        include "../../connect/connect.php";
        include "../../model/users/authorization.php";

        $login = $_POST['login'];
        $password = $_POST['password'];
        $password = md5($password);

        $user = new model\users\UserAuth($pdo);
        $result = $user->authorization($login, $password);
        $authuser = $result->fetch(PDO::FETCH_ASSOC);

        if ($authuser['login']) {
            setcookie('user', $authuser['login'], time() + 3600 * 24, "/");
            header('Location: /');
        } else {
            include "../../view/users/userNotFound.html";
        }
    }
}
