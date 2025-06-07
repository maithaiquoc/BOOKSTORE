<?php

class User
{
    public static function login(){
        require_once "view/user/login.php";
    }

    public static function sLogin(){
        require_once "model/user.php";
        $model = new ModelUser();
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $result = $model->checkUser($username, $password);
        if($result){
            echo "Đăng nhập thành công";
            $_SESSION["check"] = $result["permission"];
        }
        else{
            echo "Đăng nhập không thành công";
        }
    }
}