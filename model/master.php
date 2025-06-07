<?php
class MasterModel
{
//    public static function __construct() // hàm khỏi tạo: không thể sử dụng từ khóa public cùng với static
    public function __construct()
    {
    }

    //Hàm được dùng để đổ dữ liệu ra bảng khi gán giá trị bảng
    public static function get_all_from($table)
    {
        $db = new connect();
        $select = "select * from $table";
        $result = $db->getList($select);
        return $result;
    }

    public static function ThemSP($title, $price, $img)
    {
        $db = new connect();
        # Chỗ này cần định nghĩa trước khóa chính, khóa ngoại nếu không là bị lỗi => nghiên cứu
        $book_id = "th89"; # khóa chính
        $pub_id = "tn"; # khóa ngoại
        $cat_id = "th"; # khóa ngoại
        $query = "INSERT INTO book(book_id, book_name, price, img, pub_id, cat_id) VALUES ('$book_id' ,'$title' , '$price' , '$img', '$pub_id', '$cat_id')";
        $result = $db->exec($query);
        return $result;
    }

    public static function get_by_id($table, $column, $value){
        $db = new connect();
        $select = "select * from $table where $column = '$value'";
        $result = $db->getInstance($select); # tra ve 1 dong => thay phuong thuc getList bang getInstance
        return $result;
    }
}
?>
