<?php
session_start();
require_once 'config/db.php';
require_once 'model/master.php';

If(isset($_GET['controller'], $_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else{
    $controller = 'Home';
    $action = 'index';
}

if($controller == "Admin"){
    // admin layout
    require_once "view/admin/layout.php";
}
else{
    // user layout
    require_once "view/layout.php";
}
?>
