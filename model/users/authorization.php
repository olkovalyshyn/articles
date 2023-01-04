<?php

namespace model\users;

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
    }
}
