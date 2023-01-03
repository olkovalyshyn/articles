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
        $result = $this->connect->prepare($sql);
        $params = ['email' => $email, 'login' => $login, 'password' => $password];
        $result->execute($params);
    }
}
