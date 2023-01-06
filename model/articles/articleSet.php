<?php

namespace model\articles;

use ConnectionDb;

class ArticleSet extends ConnectionDb
{
    public function set($login, $article)
    {
        $sql = "INSERT INTO `news` (`login`, `article`) VALUE (:login, :article)";
        $result = $this->connect()->prepare($sql);
        $params = ['login' => $login, 'article' => $article];
        $result->execute($params);
    }
}
