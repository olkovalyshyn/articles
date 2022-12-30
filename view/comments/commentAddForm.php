<form class="setComment-form" action="./controller/comments/commentSet.php" method="post">
  <input type="hidden" name="article_id" value="<?= $row['id'] ?>" />
  <input type='hidden' name='login' value="<?= $_COOKIE['user'] ?>">
  <input type='hidden' name='article' value="<?= $row['article'] ?>">
  <textarea class="setComment-text" name="comment" placeholder="...here input your comment..."></textarea>
  <button class="setComment-btn" type="submit" name="submitSetComment">
    Add comment
  </button>

  <?php
  // include "./model/comments/commentGet.php";
  ?>

  <?php
  // echo "<h1>This is a comment</h1>";
  ?>

</form>