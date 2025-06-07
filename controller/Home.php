<?php
class Home{
    public static function index(){ # ham khong co tham so
//        function index($a){ # ham co tham so
//            echo "Hello, World"; # ham khong co ket qua tra ve
//            return false; # ham co ket qua tra ve
        require_once "model/home.php";
        $model = new ModelHome();
        $result = $model->getBBooks();
        require_once "view/home/index.php";
    }

    //Tạo hàm mới tên view()
    public static function view(){
        //Gọi modelHome từ ./model/home.php
        require_once "model/home.php";
        $model = new ModelHome();
        //Gọi hàm lấy dữ liệu từ file ./model/home.php
        $result = $model->getDuLieu();
        require_once 'view/tintuc/index.php';
    }
}
?>
