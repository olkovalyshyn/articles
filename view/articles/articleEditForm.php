<!-- <?php
        // $id = $_POST['id'];
        // $loginWhichAddArticle = $_POST['loginWhichAddArticle'];
        // $article = $_POST['article'];
        // echo $article;
        // echo $loginWhichAddArticle;
        ?> -->

<h2>Edit article</h2>
<form class='auth-form' action="../../model/articles/articleEdit.php" method='post'>
    <input type='hidden' name='id' value=<?= $_POST['id'] ?>>
    <input type='hidden' name='login' value=<?= $_POST['loginWhichAddArticle'] ?>>
    <textarea class='auth-item' name='article'><?= $_POST['article'] ?></textarea>
    <button class='auth-btn' type='submit' name='submitUpdateArticle'>Edit article</button>
</form>