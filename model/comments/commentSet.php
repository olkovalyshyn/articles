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

    // if (isset($_POST["submitSetComment"]) && isset($_COOKIE['user'])) {
    //     $article_id = $_POST['article_id'];
    //     $login = $_POST['login'];
    //     $article = $_POST['article'];
    //     $comment = $_POST['comment'];

    //     // echo $article_id;
    //     // echo $login;
    //     // echo $article;
    //     // echo $comment;

    //     $pdo = new mysqli('localhost', 'root', '', 'news-php');
    //     $sql = "INSERT INTO `comments` (`article_id`, `login`, `article`, `comment`) VALUE ('$article_id', '$login', '$article', '$comment')";
    //     $result = $pdo->query($sql);

    //     $pdo->close();
    // }

    // header('Location: /');
