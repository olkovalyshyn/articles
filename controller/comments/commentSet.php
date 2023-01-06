<?php
$notice = new CommentSet();
$notice->set();

class CommentSet
{
    public function set()
    {
        include "../../connect/connect.php";
        include "../../vendor/autoload.php";

        if (isset($_POST["submitSetComment"]) && isset($_COOKIE['user'])) {
            $article_id = $_POST['article_id'];
            $login = $_POST['login'];
            $article = $_POST['article'];
            $comment = $_POST['comment'];

            $remark = new model\comments\CommentSet();

            $remark->set($article_id, $login, $article, $comment);
            header('Location: /');
        }
    }
}
