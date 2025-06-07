<?php
class ModelUser extends MasterModel{
    function checkUser($username, $password){
        $db = new connect();
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $db->getInstance($query);
        return $result;
    }
} ?>
