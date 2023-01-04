<?php

namespace model\articles;

class ArticleGet
{
    private $connect;

    public function __construct($pdo)
    {
        $this->connect = $pdo;
    }

    public function get()
    {
        $sql = "SELECT * FROM `news` ORDER BY `date` DESC";
        $result = $this->connect->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }
}
