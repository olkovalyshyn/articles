<?php

namespace model\articles;

class ArticleSet
{
    private $connect;

    public function __construct($pdo)
    {
        $this->connect = $pdo;
    }

    public function set($login, $article)
    {
        $sql = "INSERT INTO `news` (`login`, `article`) VALUE (:login, :article)";
        $result = $this->connect->prepare($sql);
        $params = ['login' => $login, 'article' => $article];
        $result->execute($params);
    }
}
