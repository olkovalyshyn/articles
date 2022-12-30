    <?php
    // ЦЕ ТРЕБА !!!!!!!!!!!!!!!!!!!
    include "../model/articles/articleDelete.php";
    include "../connect/connect.php";


    $id = $_POST['id'];
    $loginWhichAddArticle = $_POST['loginWhichAddArticle'];
    $loginWhichRegisteredOnSite = $_COOKIE['user'];

    // echo $loginWhichAddArticle;
    // echo $loginWhichRegisteredOnSite;


    if ($loginWhichAddArticle === $loginWhichRegisteredOnSite || $loginWhichAddArticle === "admin" || $loginWhichRegisteredOnSite === "admin") {
        $article = new ArticleDelete($pdo);
        $article->delete($id);
        header("Location: /");
    } else
        include "../view/articles/articleIsOwnerMesage.html";
    ?>
