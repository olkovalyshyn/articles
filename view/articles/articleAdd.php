<form class="setArticle-form" action='../controller/articles/articleSet.php' method="post">
  <input type="hidden" name="id" />
  <input type='hidden' name='login' value="<?= $_COOKIE['user'] ?>">
  <textarea class="setArticle-text" name="article" placeholder="...here input your article..."></textarea>
  <button class="setArticle-btn" type="submit" name="submitAddArticle">
    Add article
  </button>
</form>