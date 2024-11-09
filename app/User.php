<?php 

namespace App;

use PDO;

class User {

    private string $name;
    private string $email;
    private string $password;

    public DateBAse $db;

    public function __construct()
    {
        $this->db = new DateBase();
    }

    public function createUser($name, $email, $password) {
        $stmt = $this->db->conn->prepare("SELECT * FROM `User` WHERE `name` = ? OR `email` = ?");
        $stmt->execute([$name,$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result > 1) {
            return 0;
        }else {
            $stmt = $this->db->conn->prepare("INSERT INTO `User` (`name`, `email`, `password`) VALUES (?,?,?)");
            $stmt->execute([$name, $email, $password]);
            return 1;
        }
    }
    public function loginUser($email, $password) {
        $stmt = $this->db->conn->prepare("SELECT * FROM `User` WHERE `email` = ? AND `password` = ?");
        $stmt->execute([$email, $password]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        if($result > 1){
            $_SESSION['name'] = $result['name'];
            $_SESSION['user'] = $email;
            return 1;
        }else {
            return 0;
        }
    }
}