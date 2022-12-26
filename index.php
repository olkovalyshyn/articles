<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.min.css" />
    <title>Document</title>
</head>

<body class="container">

    <header class="header">
        <?php
        include "./controller/headerController.php";
        ?>
    </header>

    <?php


    include "./controller/showArticleAdd.php";
    include "./model/articles/articleGet.php";

    ?>

</body>

</html>