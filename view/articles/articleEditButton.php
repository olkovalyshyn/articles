<form class='auth-form' action='../../controller/articles/articleIsOwnerEdit.php' method='post'>
    <input type='hidden' name='id' value="<?= $item['id'] ?>">
    <input type='hidden' name='loginWhichAddArticle' value="<?= $item['login'] ?>">
    <input type='hidden' name='article' value="<?= $item['article'] ?>">

    <button class='auth-btn' type='submit' name='submitEditArticle'>Edit article</button>
</form>