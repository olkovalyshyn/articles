<form class="setComment-form" action="../../controller/comments/commentSet.php" method="post">
  <input type="hidden" name="article_id" value="<?= $item['id'] ?>" />
  <input type='hidden' name='login' value="<?= $_COOKIE['user'] ?>">
  <input type='hidden' name='article' value="<?= $item['article'] ?>">
  <textarea class="setComment-text" name="comment" placeholder="...here input your comment..."></textarea>
  <button class="setComment-btn" type="submit" name="submitSetComment">
    Add comment
  </button>
</form>