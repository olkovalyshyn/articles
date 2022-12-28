    <?php

    $id = $_POST['id'];
    $loginWhichAddArticle = $_POST['loginWhichAddArticle'];
    $loginWhichRegisteredOnSite = $_COOKIE['user'];

    // echo "id: " . $id . "<br>";
    // echo "AddArticle: " . $loginWhichAddArticle . "<br>";
    // echo "RegisteredOnSite: " . $loginWhichRegisteredOnSite;


    // $connect = new mysqli('localhost', 'root', '', 'news-php');
    // $sql = "DELETE FROM `news` WHERE `id` = '$id' AND `login` = '$loginWhichAddArticle'";
    // $result = $connect->query($sql);
    // $connect->close();

    include '../connect/connect.php';
    $sql = $pdo->prepare("DELETE FROM `news` WHERE `id` = '$id' AND `login` = '$loginWhichAddArticle'");
    $sql->execute();

    header("Location: /");
