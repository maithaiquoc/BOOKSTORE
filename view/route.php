<?php
//Gọi tầng controller
require_once 'controller/'.$controller.'.php';

//Dùng switch để hiện giao diện bằng URL. VD: demo.com/?controller=home
switch($controller){
    case 'Home':
        $controller = new Home();
        break;
    case 'Book':
        $controller = new Book();
        break;
    case 'User':
        $controller = new User();
        break;
    case 'Cart':
        $controller = new Cart();
        break;
}
$controller->{ $action }();
?>
