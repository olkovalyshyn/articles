<?php

namespace model\users;

use ConnectionDb;

class UserReg extends ConnectionDb
{
    public function registration($email, $login, $password)
    {
        $sql = "INSERT INTO `users` (`email`, `login`, `password`) VALUE (:email, :login, :password)";
        $result = $this->connect()->prepare($sql);
        $params = ['email' => $email, 'login' => $login, 'password' => $password];
        $result->execute($params);
    }
}
