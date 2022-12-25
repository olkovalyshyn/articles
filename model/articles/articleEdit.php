    <?php

    if (isset($_POST["submitUpdateArticle"]) && isset($_COOKIE['user'])) {
        $id = $_POST['id'];
        $login = $_POST['login'];
        $article = $_POST['article'];

        $connect = new mysqli('localhost', 'root', '', 'news-php');
        $sql = "UPDATE `news` SET `article`='$article' WHERE `id` = '$id' AND `login` = '$login'";
        $result = $connect->query($sql);

        $connect->close();
    }
    header("Location: /");
