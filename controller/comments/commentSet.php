    <?php
    include "../../connect/connect.php";
    include "../../model/comments/commentSet.php";

    if (isset($_POST["submitSetComment"]) && isset($_COOKIE['user'])) {
        $article_id = $_POST['article_id'];
        $login = $_POST['login'];
        $article = $_POST['article'];
        $comment = $_POST['comment'];

        $comment = new CommentSet($pdo);
        $comment->set($article_id, $login, $article, $comment);
    }

    header('Location: /');
