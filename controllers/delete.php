<?php
use Core\Database;

if (!isset($_SESSION['user'])){
    header('location: /login');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['_method'] === 'DELETE'){
$config = require base_path("config.php");
$db = new Database($config["database"]);

    $job = $db->query("select * from jobs where id = :id", [
        'id' => $_POST['id']
    ])->find();

    if(authorize($job['user_id'], $_SESSION['user']['id'])){
        $db->query("delete from jobs where id = :id", [
            "id" => $_POST['id']
        ]);
        header('location: /listings');
        exit();
    }else{
        require base_path("/views/403.php");
    }
    
}



