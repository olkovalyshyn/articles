<?php
include "../connect/connect.php";
include "../model/articles/articleSet.php";

$login = $_COOKIE['user'];
$article = $_POST['article'];
$article = htmlspecialchars($article);

if (
    isset($_POST["submitAddArticle"]) &&
    isset($_COOKIE['user']) &&
    strlen($_POST['article']) > 0
) {

    // echo "Login: " . $login . "<br>";
    // echo "Article: " . $article . "<br>";
    // echo "strlen: " . strlen($_POST['article']);

    $article = new ArticleSet($pdo);
    $result = $article->set($login, $article);

    echo "!!!$result:  " . $result;
}
header("Location: /");

// while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//     echo "FROM LOOP " . $row['article'];
// }
