<?php

if (!isset($_SESSION['user'])){
    header('location: /login');
    exit();
}

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config["database"]);

$jobs = $db->query('SELECT * FROM jobs WHERE user_id = :user_id', [
    'user_id' => $_SESSION['user']['id']
])->getall();

require base_path("/views/listings.view.php");