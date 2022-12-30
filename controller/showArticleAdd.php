<?php
if ($_COOKIE) {
    include "./view/articles/articleAdd.php";
} else
    include "./view/articles/msgLogAddArticle.html";
