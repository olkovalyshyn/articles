<?php

class Article
{
    private $connect;

    public function __construct($pdo)
    {
        $this->connect = $pdo;
    }

    public function articleGet()
    {
        $sql = "SELECT * FROM `news` ORDER BY `date` DESC";
        $result = $this->connect->query($sql)->fetchAll();
        return $result;
    }
}


// $pdo = new mysqli('localhost', 'root', '', 'news-php');
// $sql = "SELECT * FROM `news` ORDER BY `date` DESC";
// $result = $pdo->query($sql);


// while ($row = $result->fetch_assoc()) {
?>
<!-- <div class='flex-container'> -->

<?php
// include "./view/articles/articleGetParagraph.php";
// include "./view/articles/articleEditButton.php";
// include "./view/articles/articleDeleteButton.php";

?>

<!-- </div> -->

<?php
// include "./view/comments/commentAddForm.php";
// }

?>