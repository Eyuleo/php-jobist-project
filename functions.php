<?php


function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email'],
        'id' => $user['id']
    ];

    session_regenerate_id(true);
}

function valiateEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function validateString($value, $min = 1, $max = INF)
{
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
}

function authorize($value, $loginId){
    return $value === $loginId;
}