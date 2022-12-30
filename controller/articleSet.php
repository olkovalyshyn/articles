<?php
include "../connect/connect.php";
include "../model/articles/articleSet.php";

// $login = $_COOKIE['user'];
// $article = $_POST['article'];
// $article = htmlspecialchars($article);

if (
    isset($_POST["submitAddArticle"]) &&
    isset($_COOKIE['user']) &&
    strlen($_POST['article']) > 0
) {

    $login = $_COOKIE['user'];
    $article = $_POST['article'];
    $article = htmlspecialchars($article);


    $article = new ArticleSet($pdo);
    $result = $article->set($login, $article);
}
header("Location: /");
