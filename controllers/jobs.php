<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config["database"]);

$per_page = 6;

$total_jobs = $db->query("SELECT COUNT(*) FROM jobs")->find();

$total_pages = ceil($total_jobs['COUNT(*)'] / $per_page);

$current_page =  (int) ($_GET['page'] ?? 1);

if ($current_page < 1 || $current_page > $total_pages){
    $current_page = 1;
}

$offset = $per_page * ($current_page - 1);


$jobs = $db->query("SELECT * FROM jobs ORDER BY id DESC LIMIT 6 OFFSET {$offset}")->getall();

require base_path("/views/jobs.view.php");