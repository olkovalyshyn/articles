<?php
$article = new showArticleAdd();
$article->showForm();

class showArticleAdd
{
    public function showForm()
    {
        if ($_COOKIE) {
            include "./view/articles/articleAdd.php";
        } else
            include "./view/articles/msgLogAddArticle.html";
    }
}
