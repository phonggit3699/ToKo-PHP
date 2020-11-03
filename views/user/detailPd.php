<?php 

$db = require_once("../../databaseClass.php");
$db = new database();

if (isset($_GET['id']))
    $IdPd = (int) $_GET['id'];
else {
    echo "<p style='color: red'>Lỗi: Không tìm thấy sản phẩm!<p>";
    die();
} 

$result = $db->table('book')->selectOne("id = {$IdPd}");


?>



<head>
    <link rel="stylesheet" type="text/css" href="../../public/css/styleUsPdD.css">
    <!----------------------------------------- Phương ----------------------------------------------------->
</head>


<div class="p-content-3">
    <div class="p-toko-3">
        <div class="p-left">
            <div class="p-anh-3">
                <img src="<?php echo $result["image"];?>" alt="Anh">
            </div>

            <div class="p-book-text">
                <h1><?php echo $result["name"]; ?></h1>
                <div class="p-book-line">
                    <span>Tác giả:</span>
                    <h3 class="p-tag">
                        <a href=""><?php echo $result["author"]; ?></a>
                    </h3>
                    <p>Thể loại:
                        <a href=""><?php echo $result["category"].", ".$result["subcategory"]; ?></a>
                    </p>
                </div>

                <div class="p-book-line">
                    <p>Ngày cập nhật: <?php echo date('d-m-Y',strtotime($result['date']));?></p>
                    <b>
                        <p class="p-green">Giá: <?php echo $result["price"]." vnđ"; ?></p>
                    </b>
                </div>


                <div class="p-ds">
                    <?php echo "<a href=insertcart.php?id=".$result['id'].">Thêm vào giỏ</a>"; ?>
                </div>

                <div class="p-ms">
                    <?php echo "<a href=insertviewcart.php?id=".$result['id'].">Mua ngay</a>"; ?>
                </div>
                <div class="p-ct">
                    <p>
                    <?php echo $result["description"];?>
                    </p>
                    <p>Trân trọng giới thiệu!</p>
                </div>
            </div>
        </div>
    </div>
</div>