    <?php

    class ArticleEdit
    {
        private $connect;

        public function __construct($pdo)
        {
            $this->connect = $pdo;
        }

        public function edit($id, $login, $article)
        {
            $sql = "UPDATE `news` SET `article`= :article WHERE `id` = :id AND `login` = :login";
            $params = ['id' => $id, 'login' => $login, 'article' => $article];
            $result = $this->connect->prepare($sql);
            $result->execute($params);
        }
    }
