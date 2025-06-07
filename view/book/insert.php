<?php
$titleErr = $content = null;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST['title'];
    if(empty($_POST['title'])){
        $titleErr = "Bạn chưa nhập tiêu đề";
        $title = '';
    }
    else if(!preg_match('/^[a-zA-Z0-9\s]{3,16}$/', $title) == 1){
        $titleErr = 'Tiêu đề không thỏa yêu câu';
	    $title = '';
    }
    else{
        $title = $_POST['title'];
        $price = $_POST['price'];
        $img = $_POST["file1"]["name"];
    }
}
?>

<form class="m-3" method="post" action="?controller=Book&action=insBook" enctype="multipart/form-data">
    Tiêu đề sách: <input class="border form-control" type="text" name="title" id="title" placeholder="Nhập tiêu đề sách"><span><?php echo $titleErr; ?></span><br /><br />
    Giá bán: <input class="border form-control" type="text" name="price" id="content" placeholder="Nhập giá bán sách"><br />
    Hình ảnh: <input type="file" name="file1" id="file1"> <br>
    <input class="btn btn-primary" type="submit" value="Thêm" id="btn" name="submit"> <br>
    <?php echo $title; ?>
</form>
