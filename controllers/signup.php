<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config["database"]);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $companyName = trim($_POST['company-name']);
    $companyDescription = trim($_POST['company-desc']);

    if (!valiateEmail($email)){
        $errors['email'] = 'Please provide a valid email address';
    }
    if (!validateString($password, 7, 255)){
        $errors['password'] = 'Please provide a password of atleast seven characters';
    }
    if (!validateString($companyName)){
        $errors['company-name'] = 'Please provide your company name';
    }
    if(!validateString($companyDescription, 5)){
        $errors['company-desc'] = 'Please provide a description of atleast five characters';
    }

    if (empty($errors)){
        $user = $db->query('select * from users where email = :email', [
            'email' => $email
        ])->find();

        if($user){
            header('location: /login');
            exit();
        }else{
            $db->query("INSERT INTO users(email, password, companyname, companydescription) VALUES(:email, :password, :companyname, :companydescription)", [
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'companyname' => $companyName,
                'companydescription' => $companyDescription
            ]);

            login([
                'email' => $email,
                'id' => $db->lastInsertId()
            ]);
            header('location: /');
            exit();
        }
    }
}


require base_path("/views/signup.view.php");