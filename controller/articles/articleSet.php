<?php
$article = new ArticleSet();
$article->set();

class ArticleSet
{
    public function set()
    {
        include "../../connect/connect.php";
        include "../../model/articles/articleSet.php";

        if (
            isset($_POST["submitAddArticle"]) &&
            isset($_COOKIE['user']) &&
            strlen($_POST['article']) > 0
        ) {

            $login = $_COOKIE['user'];
            $article = $_POST['article'];
            $article = htmlspecialchars($article);

            $article = new model\articles\ArticleSet($pdo);
            $result = $article->set($login, $article);

            header("Location: /");
        }
    }
}
