<?php
use Core\Database;

$config = require base_path("config.php");

$db = new Database($config["database"]);
if (!isset($_SESSION['user'])){
    header('location: /login');
    exit();
}
$user = $db->query('SELECT * FROM users WHERE id = :id', [
    'id' => $_SESSION['user']['id']
])->find();


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $type = $_POST['type'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $salary = $_POST['salary'];
    $location = $_POST['location'];
    $companyName = $_POST['company'];
    $companyDescription = $_POST['company_description'];
    $email = $_POST['contact_email'];
    $link = $_POST['apply_link'];
    $phone = $_POST['contact_phone'];


    if (!validateString($title, 3, 255)){
        $errors['title'] = 'Please provide a title of atleast three characters';
    }

    if (!validateString($description, 5, 255)){
        $errors['description'] = 'Please provide a description of atleast five characters';
    }
    if (!validateString($salary)){
        $errors['salary'] = 'Please provide a slary';
    }

    if (!validateString($location)){
        $errors['location'] = 'Please provide a location';
    }

    if (!validateString($companyName)){
        $errors['company-name'] = 'Please provide your company name';
    }
    if(!validateString($companyDescription, 5)){
        $errors['company-desc'] = 'Please provide a description of atleast five characters';
    }
    if (!valiateEmail($email)){
        $errors['email'] = 'Please provide a valid email address';
    }


    if (empty($errors)){
        $db->query("INSERT INTO jobs (type, title, description, salary, location, company_name, company_description, contact_email, apply_link, contact_phone, user_id) VALUES(:type, :title, :description, :salary, :location, :company_name, :company_description, :contact_email, :apply_link, :contact_phone, :user_id)",[
            'type' => $type,
            'title' => $title,
            'description' => $description, 
            'salary' => $salary,
            'location' =>$location,
            'company_name' => $companyName,
            'company_description' => $companyDescription,
            'contact_email' => $email,
            'apply_link' => $link,
            'contact_phone' => $phone,
            'user_id' => $_SESSION['user']['id']
        ]);

        header('location: /listings');
        exit();
    }


}




require base_path('/views/add-job.view.php');