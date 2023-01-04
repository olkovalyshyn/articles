<?php

namespace model\articles;

class ArticleEdit
{
    private $connect;

    public function __construct($pdo)
    {
        $this->connect = $pdo;
    }

    public function edit($article, $id, $login)
    {
        $sql = "UPDATE `news` SET `article`= :article WHERE `id` = :id AND `login` = :login";
        $params = [':article' => $article, ':id' => $id, ':login' => $login];
        $result = $this->connect->prepare($sql);
        $result->execute($params);

        // $sql = "UPDATE `news` SET `article`= :article WHERE `id` = :id AND `login` = :login";
        // $result = $this->connect->prepare($sql);
        // $result->bindValue(':article', $article, PDO::PARAM_STR);
        // $result->bindValue(':id', $id, PDO::PARAM_INT);
        // $result->bindValue(':login', $login, PDO::PARAM_STR);
        // $result->execute();
    }
}
