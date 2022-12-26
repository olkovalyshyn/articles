    <?php
    $loginWhichAddArticle = $_POST['loginWhichAddArticle'];
    $loginWhichRegisteredOnSite = $_COOKIE['user'];

    if ($loginWhichAddArticle === $loginWhichRegisteredOnSite || $loginWhichAddArticle === "admin") {
        include "../../model/articles/articleDelete.php";
    } else
        include "../view/articles/articleIsOwnerMesage.html";
    ?>
