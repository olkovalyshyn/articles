<?php

namespace model\articles;

use ConnectionDb;

class ArticleEdit extends ConnectionDb
{
    public function edit($article, $id, $login)
    {
        $sql = "UPDATE `news` SET `article`= :article WHERE `id` = :id AND `login` = :login";
        $params = [':article' => $article, ':id' => $id, ':login' => $login];
        $result = $this->connect()->prepare($sql);
        $result->execute($params);
    }
}
