<?php
$article = new ArticleDelete();
$article->delete();

class ArticleDelete
{
    public function delete()
    {
        include "../../connect/connect.php";
        include "../../vendor/autoload.php";
        $id = $_POST['id'];
        $loginWhichAddArticle = $_POST['loginWhichAddArticle'];
        $loginWhichRegisteredOnSite = $_COOKIE['user'];

        if ($loginWhichAddArticle === $loginWhichRegisteredOnSite || $loginWhichAddArticle === "admin" || $loginWhichRegisteredOnSite === "admin") {
            $article = new model\articles\ArticleDelete($pdo);
            $article->delete($id);
            header("Location: /");
        } else
            include "../../view/articles/articleIsOwnerMesage.html";
    }
}
