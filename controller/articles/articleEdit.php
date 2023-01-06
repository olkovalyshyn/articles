<?php

// namespace controller\articles;

$article = new ArticleEdit();
$article->edit();

class ArticleEdit
{
    public function edit()
    {
        include "../../connect/connect.php";
        // include "../../model/articles/articleEdit.php";
        include realpath("vendor/autoload.php");
        if (isset($_POST["submitUpdateArticle"]) && isset($_COOKIE['user'])) {
            $id = $_POST['id'];
            $login = $_POST['login'];
            $article = $_POST['article'];
            $article = htmlspecialchars($article);

            $article = new model\articles\ArticleEdit($pdo);
            $article->edit($article, $id, $login);

            header("Location: /");
        }
    }
}
