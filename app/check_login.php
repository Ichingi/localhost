<?php
session_start(); 
require_once("../vendor/autoload.php");

$data = [
    "email" => htmlspecialchars(trim($_POST["email"])),
    "password" => htmlspecialchars(trim($_POST["password"]))
];

if(empty($data['email']) && $data['password'] ) {
    echo "В вас є пусте поле";
} else {
    $user = new App\User();
    if($user->loginUser($data['email'],$data['password'])){
    header("Location: /index.php");
    
} else {
    echo"неправильний логін або пароль";
    }
}