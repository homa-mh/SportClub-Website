<?php

if($_SERVER['REQUEST_METHOD'] !== "POST"){
    header("Location: login.php");
    die();
}

require_once '../app/Controllers/LoginController.php';

$phone = trim($_POST['phone']) ?? null;
$name = trim($_POST['name']) ?? null;
$password = $_POST['password'] ?? null;
$action = $_POST['action'];

$controller = new LoginController();

if($action == "signIn"){
    if($controller->pass_check($phone, $password)){
        header("Location: index.php");
        die();
    }
}
if($action == "signUp"){
    if($controller->add_user($phone, $name, $password)){
        header("Location: index.php");
        die();
    }
}
if($action == "changePass"){
    $password2 = $_POST['password2'] ?? null;
    if($controller->change_pass($phone, $password, $password2)){
        header("Location: login.php");
        die();
    }
}

header("Location: login.php");
die();

