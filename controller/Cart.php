<?php
class cart{
    public function addCart(){
        $id = $_POST["id"];
        $title = $_POST["title"];
        $price = $_POST["price"];
        $image = $_POST["image"];

        if(isset($_SESSION["cart"][$id])){
            // cap nhat so luong san pham
            if(isset($_POST["num-product1"])) // cap nhat tu trang chi tiet gio hang
                $_SESSION["cart"][$id]["quantity"] = $_POST["num-product1"];
            else
                $_SESSION["cart"][$id]["quantity"] += 1; // cap nhat tu trang chi tiet san pham
        }
        else{
            // them moi
            $_SESSION["cart"][$id] = [
                "id" => $id,
                "title" => $title,
                "price" => $price,
                "image" => $image,
                "quantity" => 1
            ];
        }

        header("Location: ?controller=Cart&action=cart_detail");
    }

    public function cart_detail(){
        require_once "view/cart/cart_detail.php";
    }

    public function deleteCart(){
        unset($_SESSION["cart"]);
//        $_SESSION["cart"] = null;
        header("Location: ?controller=Cart&action=cart_detail");
    }
}
?>