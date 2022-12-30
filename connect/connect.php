       <?php
       $host = "localhost";
       $dbname = "news-php";
       $username = "root";
       $password = "";
       $charset = "utf8";

       $dsn = "mysql:host=$host; dbname=$dbname; charset=$charset";

       $pdo = new PDO($dsn, $username, $password);

       // $pdo = new mysqli($host, $username, $password, $dbname);
       

       // $connect = new PDO($dsn, $username, $password);

       // $connect = new PDO('mysql:host=localhost; dbname=news-php', 'root', '');
       
       // class ConnectDb
       // {
       //        private $connect;

       //        public function __construct($pdo)
       //        {
       //               $this->connect = $pdo;
       //        }
       // }
