<?php

use Core\Database;


$config = require base_path("config.php");

$db = new Database($config["database"]);

$jobs = $db->query("SELECT * FROM jobs LIMIT 3")->getall();

require base_path("/views/index.view.php");