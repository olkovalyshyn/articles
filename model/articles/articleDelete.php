    <?php

    class ArticleDelete
    {
        private $connect;

        public function __construct($pdo)
        {
            $this->connect = $pdo;
        }

        public function delete($id)
        {
            $sql = "DELETE FROM `news` WHERE `id` = '$id'";
            $this->connect->query($sql);
        }
    }