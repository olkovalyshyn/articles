    <?php

    if (isset($_POST["submitAddArticle"]) && isset($_COOKIE['user'])) {
        // $login = $_POST['login'];
        $login = $_COOKIE['user'];
        $article = $_POST['article'];

        // echo "Логін" . $login;
        // echo "Стаття" . $article;

        $connect = new mysqli('localhost', 'root', '', 'news-php');
        $sql = "INSERT INTO `news` (`login`, `article`) VALUE ('$login', '$article')";
        $result = $connect->query($sql);

        $connect->close();
        header("Location: /");
    }
