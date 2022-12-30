    <?php

    class CommentSet
    {
        private $connect;

        public function __construct($pdo)
        {
            $this->connect = $pdo;
        }

        public function set($article_id, $login, $article, $comment)
        {
            $sql = "INSERT INTO `comments` (`article_id`, `login`, `article`, `comment`) VALUE (:article_id, :login, :article, :comment)";
            $query = $this->connect->prepare($sql);
            $params = ['article_id' => $article_id, 'login' => $login, 'article' => $article, 'comment' => $comment];
            $query->execute($params);
        }
    }
