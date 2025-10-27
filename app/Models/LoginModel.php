<?php
declare(strict_types=1);
require_once '../app/Db.php';

class LoginModel{

    private $pdo;

    public function __construct(){
        $db = new Db();
        $this->pdo = $db->connect();
    }

    public function get_user($phone){
        $sql = "SELECT * FROM user WHERE phone = ? ;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$phone]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }
    
    public function add_user($phone, $name, $password){
        $sql = "INSERT INTO user (`phone`, `name`, `password`) VALUES(?, ?, ?);";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$phone, $name, $password]);
        $result = $this->pdo->lastInsertId();
        return $result ?: null;
    }
    
    public function change_pass($phone, $password){
        try{
            $sql = "UPDATE user SET password = ? WHERE phone = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$phone, $password]);
            return true;
        }catch(PDOException){
            return false;
        }
        
    }

    public function log_login($phone) {
        $sql = "INSERT INTO login_logs (phone) VALUES(?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$phone]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }


}

