<?php
// require "./articlePrint.php";

$connect = new mysqli('localhost', 'root', '', 'news-php');
$sql = "SELECT * FROM `news`";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()) {
?>
    <div class='flex-container'>

        <?php
        include "./view/articles/articleGetParagraph.php";
        include "./view/articles/articleEditButton.php";
        include "./view/articles/articleDeleteButton.php";
        // include "./model/comments/commentGet.php";

        ?>

    </div>

<?php
    include "./view/comments/commentAddForm.php";
    // include "./model/comments/commentGet.php";


}
$connect->close();

?>