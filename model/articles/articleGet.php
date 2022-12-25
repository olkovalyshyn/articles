<?php
// require "./articlePrint.php";

$connect = new mysqli('localhost', 'root', '', 'news-php');
$sql = "SELECT * FROM `news`";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<p>{$row["article"]}</p>";

    include "./view/articles/articleEditButton.php";
    include "./view/articles/articleDeleteButton.php";

    include "./model/comments/commentAdd.php";

    // include "./model/comments/commentGet.php";

    // require "print.php";
    // $text = new PrintText();
    // $text->articlePrint($row["article"]);
}
$connect->close();
