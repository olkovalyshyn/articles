<?php

namespace model\users;

use ConnectionDb;

class UserAuth extends ConnectionDb
{
    public function authorization($login, $password)
    {
        $sql = "SELECT * FROM `users` WHERE `login` = :login AND `password` = :password";
        $query = $this->connect()->prepare($sql);
        $params = ['login' => $login, 'password' => $password];
        $query->execute($params);
        return $query;
    }
}
