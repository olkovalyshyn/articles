<?php

namespace model\comments;

use ConnectionDb;

class CommentSet extends ConnectionDb
{
    public function set($article_id, $login, $article, $comment)
    {
        $sql = "INSERT INTO `comments` (`article_id`, `login`, `article`, `comment`) VALUE (:article_id, :login, :article, :comment)";
        $query = $this->connect()->prepare($sql);
        $params = ['article_id' => $article_id, 'login' => $login, 'article' => $article, 'comment' => $comment];
        $query->execute($params);
    }
}
