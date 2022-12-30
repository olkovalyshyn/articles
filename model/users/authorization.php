<?php


class UserAuth
{
    private $connect;

    public function __construct($pdo)
    {
        $this->connect = $pdo;
    }

    public function authorization($login, $password)
    {
        $sql = "SELECT * FROM `users` WHERE `login` = :login AND `password` = :password";
        $query = $this->connect->prepare($sql);
        $params = ['login' => $login, 'password' => $password];
        $query->execute($params);
        return $query;

        // if ($result !== FALSE) {
        //     $result = $result->execute($params);
        // } else {
        //     $result = "Here is a mistake!!!";
        // }
        // return $result;

        // if ($result) {
        //     $result->execute($params)->fetch_assoc();
        // } else echo "Here is a mistake!!!";


        // $result = $connect->query($sql);

        // $authuser = $result->fetch_assoc();


        // return $result->fetch_assoc();

        // $sql = "UPDATE `news` SET `article`= :article WHERE `id` = :id AND `login` = :login";
        // $params = ['id' => $id, 'login' => $login, 'article' => $article];
        // $result = $this->connect->prepare($sql);
        // $result->execute($params);
    }
}





// $login = $_POST['login'];
// $password = $_POST['password'];

// $password = md5($password);

// $connect = new mysqli('localhost', 'root', '', 'news-php');

// $sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
// $result = $connect->query($sql);

// $authuser = $result->fetch_assoc();
// // echo "!!!!!!" . $authuser;

// if (isset($authuser)) {
//     include "../../view/userNotFound.html";
// }

// setcookie('user', $authuser['login'], time() + 3600 * 24, "/");

// $connect->close();

// header('Location: /');
