<?php

namespace controller\articles;

$article = new ArticleEdit();
$article->edit();

class ArticleEdit
{
    public function edit()
    {
        include "../../connect/connect.php";
        include "../../model/articles/articleEdit.php";

        if (isset($_POST["submitUpdateArticle"]) && isset($_COOKIE['user'])) {
            $id = $_POST['id'];
            $login = $_POST['login'];
            $article = $_POST['article'];
            $article = htmlspecialchars($article);

            $article = new ArticleEdit($pdo);
            $article->edit($article, $id, $login);

            header("Location: /");
        }
    }
}
