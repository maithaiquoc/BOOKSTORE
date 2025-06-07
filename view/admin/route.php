<?php
//Gọi tầng controller
require_once 'controller/'.$controller.'.php';

//Dùng switch để hiện giao diện bằng URL. VD: demo.com/?controller=home
switch($controller){
    case 'Admin':
        $controller = new Admin();
        break;
}
$controller->{ $action }();
?>
