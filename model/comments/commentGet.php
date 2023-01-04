<?php

namespace model\comments;

class CommentGet
{
    private $connect;

    public function __construct($pdo)
    {
        $this->connect = $pdo;
    }

    public function get()
    {
        $sql = "SELECT * FROM `comment` ORDER BY `date` DESC";
        $result = $this->connect->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }
}
