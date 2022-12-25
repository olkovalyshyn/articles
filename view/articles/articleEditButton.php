<form class='auth-form' action='./view/articles/articleEditForm.php' method='post'>
    <input type='hidden' name='id' value="<?= $row['id'] ?>">
    <input type='hidden' name='loginWhichAddArticle' value="<?= $row['login'] ?>">
    <input type='hidden' name='article' value="<?= $row['article'] ?>">

    <!-- <textarea type='hidden' class='auth-item' name='article'>" .  $article . "</textarea> -->
    <button class='auth-btn' type='submit' name='submitEditArticle'>Edit article</button>
</form>