<?php
require_once("../vendor/autoload.php");

$data = [
    "name" => htmlspecialchars(trim($_POST["name"])),
    "email" => htmlspecialchars(trim($_POST["email"])),
    "password" => htmlspecialchars(trim($_POST["password"]))
];

foreach($_POST as $value) {
    if(empty($value)) {
        echo "В вас пусте поле {$value}.заповніть його";
        exit;
    }
}
$user = new App\User();
$result = $user->createUser($data['name'], $data['email'], $data['password']);

if(!$result){
    echo "такий аккаунт вже існує";
}else {
    header("Location: /index.php");
}
