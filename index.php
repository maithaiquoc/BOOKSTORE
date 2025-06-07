<?php
session_start();
//Nhúng thư viện Model và Database
require_once 'config/db.php';
require_once 'model/master.php';
//Gọi URL dưới tên demo.com/?controller=yourController&action=yourAction
If(isset($_GET['controller'], $_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else{
    $controller = 'Home';
    $action = 'index';
}

if($controller == "Admin"){
    require_once "view/admin/layout.php";
}
else{
    require_once "view/layout.php";
}
?>
