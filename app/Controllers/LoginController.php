<?php
declare(strict_types=1);
require_once '../app/session_config.php';
require_once '../app/models/LoginModel.php';

class LoginController{
    private $model;
    public function __construct(){
        $this->model = new LoginModel();
    }

    public function send_code($user_name): bool{
        if(empty($user_name)){
            $_SESSION['error'] = "لطفا تلفن همراه خود را وارد کنید.";
            return false;
        }
        
        $user = $this->model->get_user($user_name);
            if(preg_match('/^09\d{9}$/', $user_name)){
                $this->model->add_user($user_name);
            }else{
                $_SESSION['error'] = "تلفن همراه وارد شده اشتباه است";
                return false;
            }
            
        $code = rand(100000, 999999);
        $send_status = $this->model->send_sms($user_name, $code);
        
        if(!$send_status){
            $_SESSION['error'] = "خطا در ارسال کد";
            return false;
        }

        $_SESSION['pre_value'] = $user_name;
        $_SESSION['success'] = "کد ارسال شد";
        $_SESSION['send_time'] = time();
        $_SESSION['code'] = $code;
        return true;
    }

    public function code_check($user_name, $pwd): bool{
        // if session was not set
        if(!isset($_SESSION['pre_value']) || !isset($_SESSION['code'])){
            $_SESSION['error'] = "لطفا با یک مرورگر وارد شوید.";
            return false;
        }
        if($user_name != $_SESSION['pre_value']){
            $_SESSION['error'] = "شماره تلفن تغییر کرده است. لطفا مجددا کد را دریافت کنید.";
            return false;
        }
        if(empty($user_name) || empty($pwd)){
            $_SESSION['error'] = "لطفا فیلد ها را تکمیل کنید.";
            return false;
        }
        if($pwd != $_SESSION['code']){
            $_SESSION['error'] = "کدی که وارد کرده اید اشتباه است.";
            return false;
        }

        if ($pwd == $_SESSION['code']) {
            $this->model->log_login($user_name);
            return true;
        }

    }
    
    public function set_sessions($user_name){
        unset($_SESSION['code']);
        unset($_SESSION['pre_value']);
        unset($_SESSION['send_time']);
        
        $user = $this->model->get_user($user_name);
        $_SESSION['user_info'] = $user;
        return true;
    }
}