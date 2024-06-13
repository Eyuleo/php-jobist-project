<?php

if (!isset($_SESSION['user'])){
    header('location: /login');
    exit();
}

session_destroy();
header('Location: /');
exit();
