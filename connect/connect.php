<?php
class ConnectionDb
{
       private $host = "localhost";
       private $dbname = "news-php";
       private $username = "root";
       private $password = "";


       protected function connect()
       {
              $dsn = "mysql:host=$this->host; dbname=$this->dbname";
              $pdo = new PDO($dsn, $this->username, $this->password);
              $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
              return $pdo;
       }
}
