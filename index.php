<?php

require "functions.php";
// require "router.php";

//? connect to MySQL database.
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=php_for_beginners_laracasts;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>". $post['title'] ."</li>";
}