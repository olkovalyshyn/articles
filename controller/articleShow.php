<?php
// ЦЕ ТРЕБА!!!!!!!!!!!!!!!!!!!!!!!!!!
include "./connect/connect.php";
include "./model/articles/articleGet.php";
$article = new ArticleGet($pdo);
$listArticles = $article->get();
?>


<div class='flex-container'>
    <?php
    // echo $result;
    foreach ($listArticles as $item)
    // while ($item = mysqli_fetch_assoc($result)) 
    {
        include "./view/articles/articleGetParagraph.php";
        include "./view/articles/articleEditButton.php";
        include "./view/articles/articleDeleteButton.php";
        include "./view/comments/commentAddForm.php";

        // echo $item["article"] . "<br>";
    }
    ?>
</div>