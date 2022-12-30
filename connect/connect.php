       <?php
       $host = "localhost";
       $dbname = "news-php";
       $username = "root";
       $password = "";
       $charset = "utf8";

       $dsn = "mysql:host=$host; dbname=$dbname; charset=$charset";

       $pdo = new PDO($dsn, $username, $password);
