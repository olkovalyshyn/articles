<?php

namespace model\articles;

use ConnectionDb;

class ArticleGet extends ConnectionDb
{
    public function get()
    {
        $sql = "SELECT * FROM `news` ORDER BY `date` DESC";
        $result = $this->connect()->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }
}
