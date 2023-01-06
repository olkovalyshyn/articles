<?php

namespace model\articles;

use ConnectionDb;

class ArticleDelete extends ConnectionDb
{
    public function delete($id)
    {
        $sql = "DELETE FROM `news` WHERE `id` = '$id'";
        $this->connect()->query($sql);
    }
}
