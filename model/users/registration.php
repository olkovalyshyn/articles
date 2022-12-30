<?php


class UserReg
{
    private $connect;

    public function __construct($pdo)
    {
        $this->connect = $pdo;
    }

    public function registration($email, $login, $password)
    {
        $sql = "INSERT INTO `users` (`email`, `login`, `password`) VALUE (:email, :login, :password)";
        $query = $this->connect->prepare($sql);
        $params = ['email' => $email, 'login' => $login, 'password' => $password];
        $query->execute($params);
    }
}


// $email = $_POST['email'];
// $login = $_POST['login'];
// $password = $_POST['password'];

// $password = md5($password);

// $connect = new mysqli('localhost', 'root', '', 'news-php');
// $connect->query("INSERT INTO `users` (`email`, `login`, `password`)
//  VALUES('$email','$login','$password')");

// $connect->close();

// header('Location: /');
