<?php

require "functions.php";
require "Database.php";
// require "router.php";

$config = require "config.php";

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from notes where id = :id";

$notes = $db->query($query, [':id' => $id])->fetch();

dd($notes);