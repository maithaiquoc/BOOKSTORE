<?php
class Book{
    public static function bookForm(){
        require_once 'view/book/insert.php';
    }

    public static function insBook(){
        require_once 'view/book/insert.php';
        if($_POST['title'] == ''){
		    echo 'Chưa có dữ liệu';
        }else{
            echo $_POST['title'];
            echo $_POST['price'];
	    }

        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $price = $_POST['price'];
            $tmp_name = $_FILES['file1']['tmp_name'];
            $path = 'C:\xampp\htdocs\Project\public\images\book';
            $name = $path . DIRECTORY_SEPARATOR . $_FILES['file1']['name'];
            $success = move_uploaded_file($tmp_name, $name);
            $img = $_FILES['file1']['name'];
            //Gọi từ ./model/book.php
            require_once "model/Book.php";
            $model = new ModelBook();
            $result = $model->insertBook($title, $price, $img);
        }
    }

    public static function detail(){
        require_once "model/book.php";
        $model = new ModelBook();
        $result = $model->get_product_by_id($_GET['id']);
        require_once 'view/book/product-detail.php';
    }

} ?>
