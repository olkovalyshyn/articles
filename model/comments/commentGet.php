    <?php

    // if (isset($_POST["submitSetComment"]) && isset($_COOKIE['user'])) {

    //     $id = $_POST['article_id'];

    //     $connect = new mysqli('localhost', 'root', '', 'news-php');
    //     $sql = "SELECT * FROM `comments`";
    //     $result = $connect->query($sql);

    //     while ($row = $result->fetch_assoc()) {
    //         if ($id === $row["article_id"]) {
    //             echo "<p>{$row["comment"]}</p>";
    //         }
    //     }
    // }



    // $id = $_POST['article_id'];

    $connect = new mysqli('localhost', 'root', '', 'news-php');
    $sql = "SELECT * FROM `comments`";
    $result = $connect->query($sql);


    while ($row = $result->fetch_assoc()) {
        echo "<p>{$row["comment"]}</p>";
    }
