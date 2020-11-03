<?php
$db = require_once('../../databaseClass.php');
$db = new database();
$target_dir = "../../public/images/uploads/";
$row = 0;
$target_file = "";
$error = [];


// Check if image file is a actual image or fake image
if (isset($_POST["submit"])  && isset($_FILES["file"]) && !empty($_FILES["file"]["name"])) {
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    // var_dump($target_file); die();
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        $error = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $error = [];
    } else {
        $error[] = "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $error[] = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["file"]["size"] > 5000000) {
        $error[] = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $error[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error[] = "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $error[] = "";
        } else {
            $error[] = "Sorry, there was an error uploading your file.";
        }
    }
    if ($uploadOk != 0) {
        $row = $db->table('book')->insertBook([
            "name" => $_POST["name"],
            "price" => floatval($_POST["price"]),
            "author" => $_POST["author"],
            "description" => $_POST["des"],
            "quantity" => (int) $_POST["quantity"],
            "image" => $target_file,
            "category" => $_POST["category"],
            "subcategory" => $_POST["subcategory"],
            "code" => $_POST["code"],
            "date" => date('Y-m-d',strtotime($_POST['date']))
        ]);
    }

    if ($row > 0) {
        header('Location: http://localhost/toko/views/admin/home.php?page=product');
    }
    else{
        unlink($target_file);
        
    }

    $error[]= "Chưa điền đầy đủ thông tin";
}


?>

<div>
    <h1 style='font-size: 20px;'><i class='fas fa-book-medical'></i> Thêm sách mới: </h1>
    <span style="color: red"><?php 
    if($error){
        echo implode(" ", $error);
    }
    ?></span>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="code">Mã sách: </label> </td>
                <td><input type="text" name="code" id="code" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="name">Tên sách: </label> </td>
                <td><input type="text" name="name" id="name" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="price">Giá sách: </label> </td>
                <td><input type="text" name="price" id="price" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="category">Thể loại: </label> </td>
                <td><input type="text" name="category" id="category" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="subcategory">Danh mục: </label> </td>
                <td><input type="text" name="subcategory" id="subcategory" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="author">Tác giả sách: </label> </td>
                <td><input type="text" name="author" id="author" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="des">Mô tả: </label> </td>
                <td><textarea type="text" name="des" id="des" class="styleInput"></textarea></td>
            </tr>
            <tr>
                <td><label for="quantity">Số lượng: </label> </td>
                <td><input type="number" name="quantity" id="quantity" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="date">Ngày thêm: </label> </td>
                <td><input type="date" name="date" id="date" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="file">Ảnh: </label> </td>
                <td><input type="file" name="file" id="file" class="styleInput"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Xong" name="submit" class="btn btn-success"></input> <button type="reset" class="btn btn-danger">Huỷ</button></td>
            </tr>
        </table>
    </form>
</div>