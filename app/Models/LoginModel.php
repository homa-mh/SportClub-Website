<?php
declare(strict_types=1);
require_once '../app/Dbh.php';

class LoginModel{

    private $pdo;

    public function __construct(){
        $db = new Dbh();
        $this->pdo = $db->connect();
    }

    public function get_user($phone){
        $sql = "SELECT * FROM user WHERE phone = ? ;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$phone]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }
    
    public function add_user($phone){
        $sql = "INSERT INTO user (phone) VALUES(?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$phone]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    public function log_login($phone) {
    $sql = "INSERT INTO login_logs (phone) VALUES(?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$phone]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }

}

