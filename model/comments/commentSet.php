    <?php

    if (isset($_POST["submitSetComment"]) && isset($_COOKIE['user'])) {
        $article_id = $_POST['article_id'];
        $login = $_POST['login'];
        $article = $_POST['article'];
        $comment = $_POST['comment'];

        // echo $article_id;
        // echo $login;
        // echo $article;
        // echo $comment;

        $connect = new mysqli('localhost', 'root', '', 'news-php');
        $sql = "INSERT INTO `comments` (`article_id`, `login`, `article`, `comment`) VALUE ('$article_id', '$login', '$article', '$comment')";
        $result = $connect->query($sql);

        $connect->close();
    }

    header('Location: /');