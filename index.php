<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.min.css" />
    <title>News</title>
</head>

<body class="container">

    <?php
    include "./view/popup/popupBtnOpen.html";

    include "./view/popup/popupWindow.html";
    ?>

    <header class="header">
        <?php
        include "./controller/users/headerController.php";
        ?>
    </header>

    <?php
    include "./controller/articles/showArticleAdd.php";
    include "./controller/articles/articleShow.php"
    ?>
    <script src="./model/popup/popupActions.js"></script>
</body>

</html>