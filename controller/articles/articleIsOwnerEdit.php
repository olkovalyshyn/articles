<?php
$article = new ArticleIsOwnerEdit();
$article->edit();

class ArticleIsOwnerEdit
{
    public function edit()
    {
        $loginWhichAddArticle = $_POST['loginWhichAddArticle'];
        $loginWhichRegisteredOnSite = $_COOKIE['user'];

        if ($loginWhichAddArticle === $loginWhichRegisteredOnSite || $loginWhichAddArticle === "admin") {
            include "../../view/articles/articleEditForm.php";
        } else
            include "../../view/articles/articleIsOwnerMesage.html";
    }
};
