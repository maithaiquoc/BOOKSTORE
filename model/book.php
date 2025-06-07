<?php
class ModelBook extends MasterModel{
    function insertBook($title, $price, $img){
        return parent::ThemSP($title, $price, $img);
    }

    public static function get_product_by_id($id){
        return parent::get_by_id("book", "book_id", $id);
    }
} ?>
