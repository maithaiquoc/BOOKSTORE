<?php
//Kế thừa hàm get_all_from($table) từ file master.php
class ModelHome extends MasterModel{
    function getDuLieu(){
        //Lấy tất cả dữ liệu từ bảng news
        //get_all_from(‘tên bảng’);
        return parent::get_all_from('news');
    }

    function getBBooks(){
        return parent::get_all_from('book');
    }
}
?>