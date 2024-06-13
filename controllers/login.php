<?php

if (isset($_SESSION['user'])){
    header('location: /');
    exit();
}
use Core\Database;

$config = require base_path("config.php");

$db = new Database($config["database"]);

$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)){
        $errors['email'] = 'please fill out required fields';
    }

    if (empty($errors)){
        $user = $db->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find();
    
        if ($user){
            if (password_verify($password, $user['password'])){
                login($user);
                header('location: /');
                exit;
            }else{
                $errors['email'] = 'Incorrect email or password';
            }
        }
    }


}



require base_path("/views/login.view.php");