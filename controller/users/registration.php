<?php
$user = new UserReg();
$user->registration();


class UserReg
{
    public function registration()
    {
        include "../../connect/connect.php";
        include "../../model/users/registration.php";

        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $password = md5($password);

        $user = new model\users\UserReg($pdo);
        $user->registration($email, $login, $password);

        header('Location: /');
    }
}
