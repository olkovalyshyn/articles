<?php
$article = new ArticleEdit();
$article->edit();

class ArticleEdit
{
    public function edit()
    {
        include "../../connect/connect.php";
        include "../../vendor/autoload.php";
        if (isset($_POST["submitUpdateArticle"]) && isset($_COOKIE['user'])) {
            $id = $_POST['id'];
            $login = $_POST['login'];
            $article = $_POST['article'];
            $article = htmlspecialchars($article);

            $news = new model\articles\ArticleEdit();
            $news->edit($article, $id, $login);

            header("Location: /");
        }
    }
}
