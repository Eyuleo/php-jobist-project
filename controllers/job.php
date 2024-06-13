<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config["database"]);
if (!isset($_GET['id'])){
    require base_path("/views/404.php");
    exit();
}
$job = $db->query("SELECT * FROM jobs WHERE id = :id", [
    "id" => $_GET['id'],
])->find();

require base_path("/views/job.view.php");