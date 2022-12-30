<form class='auth-form' action='./controller/articleIsOwnerDelete.php' method='post'>
    <input type='hidden' name='id' value="<?= $item['id'] ?>">
    <input type='hidden' name='loginWhichAddArticle' value="<?= $item['login'] ?>">
    <input type='hidden' name='article' value="<?= $item['article'] ?>">

    <!-- <textarea type='hidden' class='auth-item' name='article'>" .  $article . "</textarea> -->
    <button class='auth-btn' type='submit' name='submitDeleteArticle'>Delete article</button>
</form>