<?php
$article = new ArticleSet();
$article->set();

class ArticleSet
{
    public function set()
    {
        include "../../connect/connect.php";
        include "../../vendor/autoload.php";

        if (
            isset($_POST["submitAddArticle"]) &&
            isset($_COOKIE['user']) &&
            strlen($_POST['article']) > 0
        ) {

            $login = $_COOKIE['user'];
            $article = $_POST['article'];
            $article = htmlspecialchars($article);

            $news = new model\articles\ArticleSet();
            $news->set($login, $article);

            header("Location: /");
        }
    }
}
