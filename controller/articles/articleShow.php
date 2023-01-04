<?php
$article = new ArticleShow();
$article->show();

class ArticleShow
{
    public function show()
    {
        include "./connect/connect.php";
        include "./model/articles/articleGet.php";
        $article = new model\articles\ArticleGet($pdo);
        $listArticles = $article->get();
?>

        <div class='flex-container'>
            <?php
            foreach ($listArticles as $item) {
                include "./view/articles/articleGetParagraph.php";
                include "./view/articles/articleEditButton.php";
                include "./view/articles/articleDeleteButton.php";
                include "./view/comments/commentAddForm.php";
            }
            ?>
        </div>
<?php
    }
}
?>