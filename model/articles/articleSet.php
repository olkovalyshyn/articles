    <?php

    class ArticleSet
    {
        private $connect;

        public function __construct($pdo)
        {
            $this->connect = $pdo;
        }

        public function set($login, $article)
        {
            $sql = "INSERT INTO `news` (`login`, `article`) VALUE (:login, :article)";
            $query = $this->connect->prepare($sql);
            $params = ['login' => $login, 'article' => $article];
            $query->execute($params);
        }
    }
