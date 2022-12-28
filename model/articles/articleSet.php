    <?php

    if (isset($_POST["submitAddArticle"]) && isset($_COOKIE['user'])) {
        // $login = $_POST['login'];
        $login = $_COOKIE['user'];
        $article = $_POST['article'];
        $article = htmlspecialchars($article);

        // echo "Логін" . $login;
        // echo "Стаття" . $article;

        // $connect = new mysqli('localhost', 'root', '', 'news-php');
        // $sql = "INSERT INTO `news` (`login`, `article`) VALUE ('$login', '$article')";
        // $result = $connect->query($sql);

        // $connect->close();
        // header("Location: /");

        // $connect = new PDO('mysql:host=localhost; dbname=news-php', 'root', '');
        include '../../connect/connect.php';
        // $pdo->exec('SET NAMES UTF8');

        if (strlen($_POST['article']) > 0) {
            $sql = $pdo->prepare("INSERT INTO `news` (`login`, `article`) VALUE (:login, :article)");
            $params = ['login' => $login, 'article' => $article];
            $sql->execute($params);
            header("Location: /");
            exit();
        } else {
            header("Location: /");
        }
    }
