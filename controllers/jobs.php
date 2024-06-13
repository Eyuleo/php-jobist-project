<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config["database"]);

$jobs = $db->query("SELECT * FROM jobs")->getall();

require base_path("/views/jobs.view.php");