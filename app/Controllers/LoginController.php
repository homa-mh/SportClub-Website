<?php
declare(strict_types=1);
require_once '../app/session_config.php';
require_once '../app/models/LoginModel.php';

class LoginController{
    private $model;
    public function __construct(){
        $this->model = new LoginModel();
    }

    public function pass_check($user_name, $password): bool{

        if(empty($user_name)){
            $_SESSION['error'] = "لطفا تلفن همراه خود را وارد کنید.";
            return false;
        }

        if(!preg_match('/^09\d{9}$/', $user_name)){
            $_SESSION['error'] = "تلفن همراه وارد شده اشتباه است";
            return false;
        }

        if(empty($password)){
            $_SESSION['error'] = "لطفا رمز عبور خود را وارد کنید.";
            return false;
        }

        $user = $this->model->get_user($user_name);
        if(empty($user)){
            $_SESSION['error'] = "حساب کاربری با این شماره وجود ندارد.";
            return false;
        }
        if(isset($user["password"]) && $user["password"] !== $password){
            $_SESSION['error'] = "رمز عبور اشتباه است";
            return false;
        }
        
        $_SESSION['user_info'] = $user;
        $this->model->log_login($user_name);
        return true;
    }

    public function add_user($phone, $name,  $password){

        if(empty($phone)){
            $_SESSION['error'] = "لطفا تلفن همراه خود را وارد کنید.";
            return false;
        }
        if(!preg_match('/^09\d{9}$/', $phone)){
            $_SESSION['error'] = "تلفن همراه وارد شده اشتباه است";
            return false;
        }
        if(empty($name)){
            $_SESSION['error'] = "لطفا نام خود را وارد کنید.";
            return false;
        }
        if(empty($password)){
            $_SESSION['error'] = "لطفا رمز عبور خود را وارد کنید.";
            return false;
        }

        if($this->model->add_user($phone, $name, $password)){
            $_SESSION['user_info'] = $this->model->get_user($phone);
            $this->model->log_login($phone);
            return true;
        }

        return false;

    }

    public function change_pass($phone, $password, $password2){

        if(empty($phone)){
            $_SESSION['error'] = "لطفا تلفن همراه خود را وارد کنید.";
            return false;
        }
        if(!preg_match('/^09\d{9}$/', $phone)){
            $_SESSION['error'] = "تلفن همراه وارد شده اشتباه است";
            return false;
        }
        if(empty($password) || empty($password2)){
            $_SESSION['error'] = "لطفا رمز عبور خود را وارد کنید.";
            return false;
        }
        if($password !== $password2){
            $_SESSION['error'] = "تکرار رمز عبور تطابق ندارد.";
            return false;
        }
        $user = $this->model->get_user($phone);
        if(empty($user)){
            $_SESSION['error'] = "حساب کاربری با این شماره وجود ندارد.";
            return false;
        }

        if($this->model->change_pass($phone, $password)){
            $_SESSION['error'] = "رمز عبور با موفقیت تغییر یافت.";
            return true;
        }
        return false;

    }

}