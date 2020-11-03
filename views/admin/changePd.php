<?php
$db = require_once("../../databaseClass.php");
$db = new database();

if (isset($_GET['id']))
    $pd = (int) $_GET['id'];
else {
    echo "<p style='color: red'>Lỗi: Không tìm thấy sản phẩm!<p>";
    die();
} 

$result = $db->table('book')->selectOne("id = {$pd}");

?>
<div class='product'>
    <img src='<?php echo $result["image"];?>' alt='Ảnh'>
    <div class='detail'>
        <p>Giá: <?php echo $result["price"]; ?></p>
        <p>Còn lại: <?php echo $result["quantity"];?></p>
    </div>
</div>

<div>
    bu
</div>