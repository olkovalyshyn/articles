<?php

namespace model\comments;

use ConnectionDb;

class CommentGet extends ConnectionDb
{
    public function get()
    {
        $sql = "SELECT * FROM `comment` ORDER BY `date` DESC";
        $result = $this->connect()->prepare($sql);

        $result->execute();
        return $result->fetch();
    }
}
