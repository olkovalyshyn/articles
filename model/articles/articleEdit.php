    <?php

    if (isset($_POST["submitUpdateArticle"]) && isset($_COOKIE['user'])) {
        $id = $_POST['id'];
        $login = $_POST['login'];
        $article = $_POST['article'];
        $article = htmlspecialchars($article);

        // $connect = new mysqli('localhost', 'root', '', 'news-php');
        // $sql = "UPDATE `news` SET `article`='$article' WHERE `id` = '$id' AND `login` = '$login'";
        // $result = $connect->query($sql);
        // $connect->close();

        include '../../connect/connect.php';
        $sql = $pdo->prepare("UPDATE `news` SET `article`=:article WHERE `id` = '$id' AND `login` = '$login'");
        $params = ['article' => $article];
        $sql->execute($params);
    }
    header("Location: /");
