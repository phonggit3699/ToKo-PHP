<?php
$db = require_once("../../databaseClass.php");
$db = new database();

if(isset($_GET["action"])){
    $action = $_GET["action"];
}

if (isset($_GET['id']))
    $IdPd = (int) $_GET['id'];
else {
    echo "<p style='color: red'>Lỗi: Không tìm thấy sản phẩm!<p>";
    die();
} 

$result = $db->table('book')->selectOne("id = {$IdPd}");

if(isset($_POST["submit"])){
    $row = $db->table('book')->updateBookById(
        $IdPd,
        $_POST["name"],
        $_POST["price"],
        $_POST["author"],
        $_POST["des"],
        $_POST["quantity"],
        $_POST["category"],
        $_POST["subcategory"],
        $_POST["code"],
        $_POST["date"]
    );
    if ($row > 0) {
        header('Location: http://localhost/toko/views/admin/home.php?page=detailPd&action=detailPd&id='.$IdPd);
    }
    
}

if($action=="deletePd"){
    $remove = $db->table('book')->deleteRow($IdPd);
    if ($remove > 0) {
        header('Location: http://localhost/toko/views/admin/home.php?page=product');
        unlink($result["image"]);
    }
}



?>
<div class='product' >
    <img src='<?php echo $result["image"];?>' alt='Ảnh'>
    <div class='detail' <?php if($action == "detailPd"){ echo "style='display: block'";} else {echo "style='display: none'";}?>>
        <p><span>Tên:</span> <?php echo $result["name"]; ?></p>
        <p><span>Tác giả:</span> <?php echo $result["author"]; ?></p>
        <p><span>Thể loại:</span> <?php echo $result["category"]; ?></p>
        <p><span>Danh mục:</span> <?php echo $result["subcategory"]; ?></p>
        <p><span>Giá:</span> <?php echo $result["price"]." vnđ"; ?></p>
        <p><span>Mã sách:</span> <?php echo $result["code"];?></p>
        <p><span>Còn lại:</span> <?php echo $result["quantity"];?></p>
        <p><span>Ngày thêm:</span> <?php echo date('d-m-Y',strtotime($result['date']));?></p>
        <p><span>Mô tả:</span> <?php echo $result["description"];?></p>
        <a href="http://localhost/toko/views/admin/home.php?page=product" class="btn btn-info">Trở lại</a>
        <a href="http://localhost/toko/views/admin/home.php?page=detailPd&action=changePd&id=<?php echo $result["id"];?>" class="btn btn-warning">Thay đổi</a>
        <a href="http://localhost/toko/views/admin/home.php?page=detailPd&action=deletePd&id=<?php echo $result["id"];?>" class="btn btn-danger">Xoá</a>
    </div>
    <div class="changePd" <?php if($action == "changePd"){ echo "style='display: block'";} else {echo "style='display: none'";}?>>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="code">Mã sách: </label> </td>
                <td><input type="text" name="code" id="code" class="styleInput" value="<?php echo $result["code"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="name">Tên sách: </label> </td>
                <td><input type="text" name="name" id="name" class="styleInput" value="<?php echo $result["name"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="price">Giá sách: </label> </td>
                <td><input type="text" name="price" id="price" class="styleInput" value="<?php echo $result["price"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="category">Loại sách: </label> </td>
                <td><input type="text" name="category" id="category" class="styleInput" value="<?php echo $result["category"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="subcategory">Danh mục: </label> </td>
                <td><input type="text" name="subcategory" id="subcategory" class="styleInput" value="<?php echo $result["subcategory"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="author">Tác giả sách: </label> </td>
                <td><input type="text" name="author" id="author" class="styleInput" value="<?php echo $result["author"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="des">Mô tả: </label> </td>
                <td><textarea type="text" name="des" id="des" class="styleInput" ><?php echo $result["description"]; ?></textarea></td>
            </tr>
            <tr>
                <td><label for="quantity">Số lượng: </label> </td>
                <td><input type="number" name="quantity" id="quantity" class="styleInput" value="<?php echo $result["quantity"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="date">Ngày sửa: </label> </td>
                <td><input type="date" name="date" id="date" class="styleInput" value="<?php echo $result["date"]; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Xong" name="submit" class="btn btn-success"></input> 
                <a href="http://localhost/toko/views/admin/home.php?page=detailPd&action=detailPd&id=<?php echo $IdPd ?>" class="btn btn-danger">Huỷ</a></td>
            </tr>
        </table>
    </form>
    </div>

    <?php echo "<script src='' >";
        echo "var a = {$result}";
          echo "</script>"; ?>
</div>

<script >
    var a = <?php echo $result ?>
</script>
