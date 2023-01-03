<?php
include "../connect/connect.php";
include "../model/articles/articleSet.php";

if (
    isset($_POST["submitAddArticle"]) &&
    isset($_COOKIE['user']) &&
    strlen($_POST['article']) > 0
) {

    $login = $_COOKIE['user'];
    $article = $_POST['article'];
    $article = htmlspecialchars($article);

    // echo $login;
    // echo $article;

    $article = new ArticleSet($pdo);
    $result = $article->set($login, $article);

    header("Location: /");
}
